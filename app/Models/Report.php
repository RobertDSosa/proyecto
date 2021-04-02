<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Report extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
