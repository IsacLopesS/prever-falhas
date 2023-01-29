<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onibus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "onibus";
    protected $guarded = ['id'];

    public function assentos(){
        return $this->hasMany(Assento::class, 'id_onibus');
    }
    public function viagens(){
        return $this->hasMany(Viagem::class, 'id_onibus');
    }
}
