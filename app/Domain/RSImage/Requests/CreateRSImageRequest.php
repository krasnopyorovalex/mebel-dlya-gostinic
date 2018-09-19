<?php

namespace Domain\RSImage\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateRSImageRequest
 * @package Domain\RSImage\Requests
 */
class CreateRSImageRequest extends Request
{
    public function rules()
    {
        return [
            'upload' => 'image',
            'rsId' => 'integer'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'upload.image' => 'Разрешено загружать только изображения',
            'rsId.integer' => 'Поле «id продукта» должно быть целым числом'
        ];
    }
}