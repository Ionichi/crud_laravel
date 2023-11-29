<?php

namespace App\Models;

use App\Models\MasterBerita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class MasterKategori extends Model
{
    use HasFactory;
    protected $table = "master_kategori";
    protected $guarded = ['id'];

    public function master_berita()
    {
        return $this->hasMany(MasterBerita::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
