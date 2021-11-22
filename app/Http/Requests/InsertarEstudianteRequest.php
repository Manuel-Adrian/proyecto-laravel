<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class InsertarEstudianteRequest extends FormRequest
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
            'nombre'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/', 
             'apellido_paterno'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/',
             'apellido_materno'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/', 
             'edad'=>'required|regex:/^[0-9]{2,3}/',
             'email'=>'required|email|unique:estudiantes|regex:/^[a-z0-9-._]+[@][a-z0-9-._]+\.[a-z]{2,5}/',
             'telefono'=>'required|regex:/^[+]?[0-9]{8,15}/'
        ];
    }
}
