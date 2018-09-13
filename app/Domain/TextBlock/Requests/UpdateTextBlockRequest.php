<?php

namespace Domain\TextBlock\Requests;

use App\Http\Requests\Request;


/**
 * Class UpdateTextBlockRequest
 * @package Domain\TextBlock\Requests
 */
class UpdateTextBlockRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:64',
            'text' => 'required|string'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Название» обязательно для заполнения',
            'text.required' => 'Поле «Текст» обязательно для заполнения'
        ];
    }
}