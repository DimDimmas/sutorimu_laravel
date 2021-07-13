<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_list',
        'rate',
        'status',
        'cover_image',
        'type',
        'total_episode',
        'aired',
        'duration',
        'synopsis',
        'genre',
        'trailer'
    ];
}
