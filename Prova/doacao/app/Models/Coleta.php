<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function items(){
        return $this->hasMany(Items::class);
    }

    public function entidade(){
        return $this->belongsTo(Entidade::class);
    }
    
}
