<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class MasterBerita extends Model
{
    use HasFactory, Sluggable;
    protected $table = "master_berita";
    protected $guarded = ['id'];

    public function master_kategori()
    {
        return $this->belongsTo(MasterKategori::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_berita'
            ]
        ];
    }
}
