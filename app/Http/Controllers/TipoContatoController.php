<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use App\Services\TipoContato\ITipoContatoService;
use App\Services\TipoContato\TipoContatoService;

class TipoContatoController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  private ITipoContatoService $service;

  public function __construct()
  {
    $this->service = new TipoContatoService();
  }

  public function index()
  {
    try {
      return response()->json($this->service->index(), Response::HTTP_OK);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }

  }
}
