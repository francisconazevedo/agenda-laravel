<?php

namespace App\Services\Pessoa;

use App\Models\Pessoa;

class PessoaService implements IPessoaService
{

  public function store(array $pessoa): Pessoa
  {
    return Pessoa::create($pessoa);
  }

  public function show(int $id): Pessoa
  {
    return Pessoa::where('id', $id)->select('id', 'nome')->first();
  }

  public function index(): array
  {
    return Pessoa::get()->all();
  }
}
