<?php

namespace App\Http\Requests\Contato;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class StoreContatoRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'tipo_contato_id' => 'required|integer',
      'contato' => 'required|max:255',
      'pessoa_id' => 'required|integer'
    ];
  }

  /**
   * Mensagens persolnalizadas para as validações
   *
   * @return array
   */
  public function messages()
  {
    return [
    ];
  }

  /**
   * Retorna os erros encontrados
   *
   * @param Validator $validator
   */
  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
  }
}
