<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvantageRequest extends FormRequest
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
            'name' => 'required|max:100',
            'text' => 'required',
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно к заполнению',
            'max' => 'Поле :attribute должно иметь минимум :max символов',
        ];
    }
}
