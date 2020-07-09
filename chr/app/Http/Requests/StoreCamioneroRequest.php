<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarRut;


class StoreCamioneroRequest extends FormRequest
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
            'rut' => ['required', new ValidarRut()],
            'nombre' => ['required','max:15'],
            'apellido' => ['required','max:15'],
        ];
    }
}
