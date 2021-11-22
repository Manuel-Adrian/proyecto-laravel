<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ActualizarSemestreRequest extends FormRequest
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
            'grado'=>'required|'.Rule::unique('semestres')->ignore($this->route('semestres_id')).'|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,20}/'
        ];
    }
}
