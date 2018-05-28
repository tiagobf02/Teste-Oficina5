<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
        switch($this->method()) {
            case "POST": // CRIAÇÃO DE UM NOVO REGISTRO
                return [
                    
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:contatos',
                    'telefone' => 'required|max:15',               
                    'data_nascimento' => 'date_format:"Y/m/d"',
                    
                ];
                break;

            case "PUT": // ATUALIZAÇÃO DE UM REGISTRO EXISTENTE
                return [
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:contatos,email,'.$this->id,
                    'telefone' => 'required|max:15',
                    'data_nascimento' => 'date_format:"Y/m/d"',
                ];
                break;
            default:break;
        }
    }
       
}