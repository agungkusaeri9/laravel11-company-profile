<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $guarded = ['id'];

    public function gambar()
    {
        return asset('storage/' . $this->gambar);
    }
}
