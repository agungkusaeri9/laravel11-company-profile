<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $guarded = ['id'];

    public function logo()
    {
        if ($this->logo) {
            return asset('storage/' . $this->logo);
        } else {
            return asset('assets/img/stisla.svg');
        }
    }
}
