<?php

namespace App\Services\Contato;

use App\Models\Contato;

class ContatoService implements IContatoService
{
  public function store(array $contato): Contato
  {
    return Contato::create($contato);
  }

  public function destroy(int $id): bool
  {
    return Contato::destroy($id);
  }
}