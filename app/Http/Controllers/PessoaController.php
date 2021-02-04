<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contato\StoreContatoRequest;
use App\Http\Requests\Pessoa\StorePessoaRequest;
use App\Services\Pessoa\IPessoaService;
use App\Services\Pessoa\PessoaService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PessoaController extends Controller
{
  private IPessoaService $service;

  public function __construct()
  {
    $this->service = new PessoaService();
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function index()
  {
    try {
      return response()->json($this->service->index(), Response::HTTP_CREATED);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(StorePessoaRequest $request)
  {
    try {
      return response()->json($this->service->store($request->all()), Response::HTTP_CREATED);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function destroy(int $id)
  {
    try {
      return response()->json($this->service->destroy($id), Response::HTTP_OK);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }
  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id)
  {
    try {
      return response()->json($this->service->show($id), Response::HTTP_OK);
    } catch (\Exception $e) {
      return response()->json(['mensagem' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
  }

}
