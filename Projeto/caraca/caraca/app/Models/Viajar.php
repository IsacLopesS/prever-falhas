<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "viajar";
    protected $fillable = ['id_onibus','id_pessoa','id_viagem','num_assento'];

    public function onibus(){
        return $this->belongsTo(Onibus::class,'id_onibus');
    }
    public function viagem(){
        return $this->belongsTo(Viagem::class,'id_viagem');
    }
    public function pessoa(){
        return $this->belongsTo(Pessoa::class,'id_pessoa');
    }
}
