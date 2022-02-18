<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTemaRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            // Cuando haya que validar un regex, es mejor pasarlo en forma de array, ya que da problemas por que no encuentra el '/' final
            'duracion' => ['required', 'regex:/^\d{2}:\d{2}:\d{2}$/'],
            'album' => 'required|exists:albumes,id'
        ];
    }

    // Aqui se puede editar los mensajes de error.
    public function messages()
    {
        return [
            'duracion.regex' => 'Tiene que estar en formato 00:00:00, H:M:S',
        ];
    }
}
