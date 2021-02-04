<?php


namespace App\Services\Pessoa;


use App\Models\Pessoa;

interface IPessoaService
{
    public function store(array $request): Pessoa;
    public function show(int $id): Pessoa;
    public function detroy(int $id): bool;
    public function index(): array;

}
