<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cities(){
        return $this->belongsTo(cities::class);
    }

    public function estate(){
        return $this->belongsTo(Estates::class,'area_id');
    }
}
