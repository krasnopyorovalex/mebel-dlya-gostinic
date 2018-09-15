<?php

namespace Domain\WhyWe\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateWhyWeRequest
 * @package Domain\WhyWe\Requests
 */
class CreateWhyWeRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:255',
            'icon' => 'required|string|max:32',
            'link' => 'string|max:127|nullable',
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