<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contato\StoreContatoRequest;
use App\Services\Contato\IContatoService;
use App\Services\Contato\ContatoService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class ContatoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  private IContatoService $service;

  public function __construct()
  {
    $this->service = new ContatoService();
  }

  public function store(StoreContatoRequest $request)
  {
    try {
      return response()->json($this->service->store($request->all()), Response::HTTP_CREATED);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }

  public function destroy(int $id)
  {
    try {
      return response()->json($this->service->destroy($id), Response::HTTP_OK);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }
}
