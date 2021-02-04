<?php


namespace App\Services\Contato;


use App\Models\Contato;

interface IContatoService
{
    public function store(array $contato): Contato;
    public function destroy(int $id): bool;
}
