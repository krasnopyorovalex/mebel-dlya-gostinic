<?php

namespace Domain\ReadySolution\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateReadySolutionRequest
 * @package Domain\ReadySolution\Requests
 */
class CreateReadySolutionRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:255',
            'link' => 'required|string|max:127',
            'image' => 'image'
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
            'link.required' => 'Поле «Ссылка» обязательно для заполнения'
        ];
    }
}