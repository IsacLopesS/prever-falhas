<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function coletas(){
        return $this->hasMany(Coleta::class);
    }

    public function qtd(Entidade $e){
        $soma = 0.0;
        if ($e->coletas->count() == 0){
            return 0;
        }
        foreach ($e->coletas as $c){
            $soma = $soma + $c->quantidade;
        }
        return $soma;
    }

    public function totalGeral($arrayEntidade){

        if ($arrayEntidade->count() == 0){
            return 0;
        }
        $total = 0.0;
        foreach ($arrayEntidade as $entidade){
            $total = $total + $entidade->qtd($entidade);
        }
        return $total;
    }
}
