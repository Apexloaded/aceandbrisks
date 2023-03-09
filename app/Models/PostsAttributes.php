<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsAttributes extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts_attr';
    protected $fillable = [
        'post_id',
        'property_type',
        'offer_type',
        'city',
        'area',
        'property_size',
        'street',
        'bedroom',
        'bathroom',
        'year',
        'price'
    ];
}
