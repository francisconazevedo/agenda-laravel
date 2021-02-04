<?php
namespace App\Services\TipoContato;

use App\Models\TipoContato;

class TipoContatoService implements ITipoContatoService
{
  public function index(): array
  {
    return TipoContato::get()->all();
  }
}
