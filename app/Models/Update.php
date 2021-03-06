<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_update',
        'episode',
        'embed_link',
        'preview'
    ];

    public function anime(){
        return $this->belongsTo(Anime::class, 'title_update', 'title_list');
    }
}
