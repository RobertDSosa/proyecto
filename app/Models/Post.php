<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;
use App\Models\Audio;

class Post extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];

    //Relación uno a muchos inversa

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimorfica 

    public function image(){
        return $this->morphOne(image::class, 'imageable');
    }

    public function video(){
        return $this->morphOne(Video::class, 'videoable');
    }

    public function audio(){
        return $this->morphOne(Audio::class, 'audioable');
    }

    public function file(){
        return $this->morphOne(File::class, 'fileable');
    }
}
