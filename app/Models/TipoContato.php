<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
  protected $table  = 'tipos_contatos';
  public $fillable  = ['nome'];

  public function contatos(){
    $this->hasMany('App\Models\Contato');
  }
}