<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $fillable =['url', 'name'];

    public function audioable(){
       return $this->morphTo();
    }
}
