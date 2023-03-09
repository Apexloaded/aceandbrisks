<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsFeatures extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts_features';
    protected $fillable = [
        'post_id',
        'central_water',
        'chandelier',
        'exterior_brick_design',
        'wooden_doors',
        'high_ceiling',
        'hot_tub',
        'parking_lot',
        'massive_closet',
        'microwave',
        'penthouse',
        'swimming_pool',
        'tv_cable',
        'underground_cabling',
        'equipped_kitchen'
    ];
}
