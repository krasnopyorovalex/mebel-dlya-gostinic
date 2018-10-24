<?php

namespace Domain\Banner\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateBannerRequest
 * @package Domain\Banner\Requests
 */
class CreateBannerRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'text' => 'nullable|string',
            'link' => 'required|string|max:127',
            'btn_text' => 'required|string|max:64',
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
            'link.required' => 'Поле «Ссылка» обязательно для заполнения',
            'btn_text.required' => 'Поле «Текст кнопки» обязательно для заполнения',
        ];
    }
}