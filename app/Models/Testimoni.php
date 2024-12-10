<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';
    protected $guarded = ['id'];

    public function foto()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        } else {
            return asset('assets/img/avatar/avatar-1.png');
        }
    }
}
