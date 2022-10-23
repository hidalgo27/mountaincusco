<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_categoria extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->hasOne(Blog_post::class,'categoria_id');
    }
}
