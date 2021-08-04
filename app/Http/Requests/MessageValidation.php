<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageValidation extends FormRequest
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
            'name' => 'required|string|min:2',
            'surname' => 'required|string|min:2',
            'email' => 'required|email',
            'topic' => 'required|min:2',
            'description' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Pole imię jest wymagane',
            'surname.required' => 'Pole nazwisko jest wymagane',
            'email.required' => 'Pole email jest wymagane',
            'topic.required' => 'Pole temat jest wymagane',
            'description.required' => 'Pole opis jest wymagane',
            'name.string' => 'Pole imie musi byc typu tekstowego',
            'name.min' => 'Imie jest zbyt krótkie.',
            'surname.string' => 'Pole nazwisko musi byc typu tekstowego',
            'surname.min' => 'Nazwisko jest zbyt krótkie.',
            'email.email' => 'Podany e-mail jest nieprawidłowy.',
            'topic.min' => 'Pole temat posiada zbyt mało znaków.',
            'description.min' => 'Pole opis posiada zbyt mało znaków.',
        ];
    }
}
