<?php

namespace Domain\Page\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class UpdatePageRequest
 * @package Domain\Page\Requests
 */
class UpdatePageRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:512',
            'template' => 'required|string|max:24',
            'title' => 'required|max:512',
            'description' => 'max:512|nullable',
            'keywords' => 'max:512|nullable',
            'text' => 'required|string',
            'is_published' => 'digits_between:0,1',
            'image' => 'image',
            'imageAlt' => 'string|max:255',
            'imageTitle' => 'string|max:255',
            'alias' => [
                'required',
                'max:255',
                Rule::unique('pages')->ignore($this->id)
            ],
            'slider_id' => 'integer|exists:sliders,id|nullable'
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
            'title.required' => 'Поле «Title» обязательно для заполнения',
            'text.required' => 'Поле «Текст» обязательно для заполнения',
            'alias.required' => 'Поле «Alias» обязательно для заполнения',
            'alias.unique' => 'Значение поля «Alias» уже присутствует в базе данных',
        ];
    }
}