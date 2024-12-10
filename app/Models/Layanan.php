<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $guarded = ['id'];

    public function gambar()
    {
        return asset('storage/' . $this->gambar);
    }

    public static function booted()
    {
        static::creating(function ($layanan) {
            $layanan->slug = str()->slug($layanan->nama);
        });
    }
}
