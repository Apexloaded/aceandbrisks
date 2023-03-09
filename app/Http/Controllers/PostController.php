<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $postCtrl = new PostController();
        $properties = $postCtrl->getAllProperties();
        return view('pages.posts.list', compact('properties'));
    }

    public function showDetails($post_id) {
        $postCtrl = new PostController();
        $post = $postCtrl->getPostById($post_id);
        $relativePost = $postCtrl->getPostByType($post);
        return view('pages.posts.details', compact('post', 'relativePost'));
    }

    public static function getAllProperties() {
        $properties = DB::table('posts')
                        ->join('posts_attr', 'posts.id', '=', 'posts_attr.post_id')
                        ->join('posts_features', 'posts.id', '=', 'posts_features.post_id')
                        ->select('posts.*', 'posts_attr.*', 'posts_features.*')
                        ->where('posts.status', 'Published')
                        ->get();
        return $properties;
    }

    public static function getPostById($post_id) {
        $post = DB::table('posts')
                ->join('posts_attr', 'posts.id', '=', 'posts_attr.post_id')
                ->join('posts_features', 'posts.id', '=', 'posts_features.post_id')
                ->select('posts.*', 'posts_attr.*', 'posts_features.*')
                ->where('posts.status', 'Published')
                ->where('posts.id', $post_id)
                ->first();
        return $post;
    }

    public static function getPostByType($property) {
        $post = DB::table('posts')
                ->join('posts_attr', 'posts.id', '=', 'posts_attr.post_id')
                ->join('posts_features', 'posts.id', '=', 'posts_features.post_id')
                ->select('posts.*', 'posts_attr.*', 'posts_features.*')
                ->where('posts.status', 'Published')
                ->where('posts_attr.property_type', $property->property_type)
                ->where('posts.id', '!=', $property->post_id)
                ->get();
        return $post;
    }

    public static function getResentUploads() {
        $properties = DB::table('posts')
                        ->join('posts_attr', 'posts.id', '=', 'posts_attr.post_id')
                        ->join('posts_features', 'posts.id', '=', 'posts_features.post_id')
                        ->select('posts.*', 'posts_attr.*', 'posts_features.*')
                        ->where('posts.status', 'Published')
                        ->orderby('posts.created_at')
                        ->limit(4)
                        ->get();
        return $properties;
    }
}
