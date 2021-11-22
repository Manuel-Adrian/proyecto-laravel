<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ActualizarGrupoRequest extends FormRequest
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
            'clave'=> 'required|'.Rule::unique('grupos')->ignore($this->route('grupos_id')).'|regex:/^[A-Za-z]-([0-9]{3})/',
            'turnos_id'=> 'required|regex:/^[1-9]+/',
            'semestres_id'=>'required|regex:/^[1-9]+/'
        ];
    }
}
