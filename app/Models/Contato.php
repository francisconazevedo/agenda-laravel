<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
  use SoftDeletes;
  protected $table = 'contatos';
  protected $fillable = [
    'contato',
    'tipo_contato_id',
    'pessoa_id'
  ];
  public $timestamps = false;

  public function pessoa(){
    $this->belongsTo('/App/Models/Pessoa');
  }
  public function tipoContato(){
    $this->belongsTo('/App/Models/TipoContato');
  }
}