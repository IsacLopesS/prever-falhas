<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function coletas(){
        return $this->hasMany(Coleta::class);
    }

    public function qtd(Item $item){
        
        if ($item->coletas->count() == 0){
            return 0;
        }
        $total = 0;
       foreach($item->coletas as $c){
            $total = $total + $c->quantidade;
       }
       return $total;
    }
    public function totalqtd($array_itens){
        $totalqtd = 0.0;
        if ($array_itens->count() == 0){
            return 0;
        }
        foreach($array_itens as $item){
            $totalqtd = $totalqtd + $item->qtd($item); 
        }
        return $totalqtd;
    }
    public function porcentagem(Item $item, $array_itens){
        $qtd = $item->qtd($item);
        $total = $item->totalqtd($array_itens);
        $porcent = ($qtd/$total) * 100;
        $porcent = number_format($porcent, 2, '.', '');
        return $porcent;
    }
}
