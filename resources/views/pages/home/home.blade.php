@extends('layout.app')

@section('title')
    <title>Ace and Brisk</title>
@endsection

@section('content')
    <x-banner />
    <x-recent_uploads :recent="$recent"/>
    <x-grid_blog_posts />
@endsection
