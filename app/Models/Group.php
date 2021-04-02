<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Report;

class Group extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];
    
    
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function reports(){
        return $this->hasMany(Report::class);
    }

}
