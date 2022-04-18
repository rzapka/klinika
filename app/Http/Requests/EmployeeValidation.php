<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EmployeeValidation extends FormRequest
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
            'firstname' => 'required|string|min:2',
            'lastname' => 'required|string|min:2',
            'specialization' => 'required|string|min:10',
            'description' => 'required|string|min:30',
            'phone_num' => 'required|min:9|regex:/^[0-9]+$/',
            'email' => 'required|email',
            'image' => 'file|image'
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Pole imię jest wymagane.',
            'firstname.string' => 'Pole imie musi być ciągiem znaków.',
            'firstname.min' => 'Pole imię jest za krótkie.',
            'lastname.required' => 'Pole nazwisko jest wymagane.',
            'lastname.string' => 'Pole nazwisko musi być ciągiem znaków.',
            'lastname.min' => 'Pole nazwisko jest za krótkie.',
            'specialization.required' => 'Pole specjalizacja jest wymagane.',
            'specialization.string' => 'Pole specjalizacja musi być ciągiem znaków.',
            'specialization.min' => 'Pole specjalizacja jest za krótkie.',
            'description.required' => 'Pole opis jest wymagane.',
            'description.string' => 'Pole opis musi być ciągiem znaków.',
            'description.min' => 'Pole opis jest za krótkie.',
            'phone_num.required' => 'Pole nr telefonu jest wymagane.',
            'image.min' => 'Pole nr telefonu jest za krótkie.',
            'image.regex' => 'Pole nr telefonu musi składać się wyłącznie z liczb.',
            'email.required' => 'Pole email jest wymagane.',
            'email.email' => 'Pole email musi zawierać @.',
            'image.file' => 'Zdjęcie musi być typu plik.',
            'image.image' => 'Zdjęcie musi mieć format typu graficznego.',
        ];
    }
}
