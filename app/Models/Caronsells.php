<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caronsells extends Model
{
    use HasFactory;

    public function getImagePathAttribute()
    {
    return url('public/images/' . $this->filename);
    }
}
