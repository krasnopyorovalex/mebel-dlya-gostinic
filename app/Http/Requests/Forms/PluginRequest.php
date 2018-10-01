<?php

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;

/**
 * Class PluginRequest
 * @package Domain\AboutCount\Requests
 */
class PluginRequest extends Request
{
    public function rules(): array
    {
        return [
            'type' => 'required|string|min:5',
            'city' => 'required|string|min:3',
            'name' => 'required|string|min:2',
            'cat__rooms' => 'array',
            'count' => 'integer|min:0|max:100',
            'params' => 'array',
            'phone' => 'required|string|min:5',
            'email' => 'required|email'
        ];
    }
}