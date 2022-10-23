<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    use HasFactory;
    public function categoria()
    {
        return $this->belongsTo(Blog_categoria::class,'categoria_id');
    }
    public function user()
    {
        return $this->belongsTo(Blog_user::class,'user_id');
    }
    public function imagenes()
    {
        return $this->hasMany(Blog_imagen::class,'post_id');
    }
}
