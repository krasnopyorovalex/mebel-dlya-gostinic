<?php

namespace Domain\WhyWe\Requests;

use App\Http\Requests\Request;


/**
 * Class UpdateWhyWeRequest
 * @package Domain\WhyWe\Requests
 */
class UpdateWhyWeRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:255',
            'link' => 'string|max:127|nullable',
            'icon' => 'required|string|max:32',
            'pos' => 'integer|min:0|max:255'
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
            'icon.required' => 'Поле «Иконка» обязательно для заполнения'
        ];
    }
}