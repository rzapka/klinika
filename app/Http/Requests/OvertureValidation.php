<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OvertureValidation extends FormRequest
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
        $price_from = $_POST['price_from'];

        return [
            'name' => 'required|min:2',
            'price_from' => 'required|min:0|numeric',
            'price_to' => "required|min:$price_from|numeric",
            'category_id' => 'required|regex:/^[0-9]+$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Pole nazwa jest wymagane.",
            'name.min' => "Pole nazwa jest zbyt krótkie.",
            'price_from.required' => "Pole cena od jest wymagane.",
            'price_from.numeric' => "Pole cena od musi byc liczbą.",
            'price_from.min' => "Pole cena od musi byc liczbą dodatnią lub zerem.",
            'price_to.required' => "Pole cena od jest wymagane.",
            'price_to.numeric' => "Pole cena do musi byc liczbą.",
            'price_to.min' => "Pole cena do musi byc większa niż cena od.",
            'category_id.required' => "Pole kategoria jest wymagane.",
            'category_id.regex' => "Pole kategoria musi być liczbą.",
        ];
    }
}
