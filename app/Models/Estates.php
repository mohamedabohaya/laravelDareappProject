<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estates extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function city(){
        return $this->belongsTo(cities::class);
    }
    public function area(){
        return $this->belongsTo(Areas::class );
    }
    public function currency(){
        return $this->belongsTo(Currencies::class);
    }
    public function offer(){
        return $this->hasMany(Offers::class );
    }
}
