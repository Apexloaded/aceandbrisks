<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory, Uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'author',
        'image',
        'status'
    ];

    public function comments() {
        return $this->hasMany(Comments::class);
    }
}
