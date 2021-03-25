<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function countries(){
        return $this->belongsTo(Countries::class);
    }

    public function area(){
        return $this->hasMany(Areas::class,'city_id','id');
    }

    public function estate(){
        return $this->belongsTo(Estates::class,'city_id');
    }
}
