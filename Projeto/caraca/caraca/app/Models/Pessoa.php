<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['nome','rg']; // somente nome e rg serao persistido no bd
    protected $guarded = ['id']; // id nunca será submetido no bd   
    //obs: nao é necessario utilizar fillable e guarded junto, apenas um já basta. deixei ambos por fins didáticos
}
