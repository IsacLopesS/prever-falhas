<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "viagem";
    protected $guarded = ['id'];

    public function onibus(){
        return $this->belongsTo(Onibus::class,'id_onibus');
    }
}
