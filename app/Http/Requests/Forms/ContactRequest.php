<?php

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;

/**
 * Class ContactRequest
 * @package App\Http\Requests\Forms
 */
class ContactRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2',
            'phone' => 'required|string|min:5',
            'email' => 'required|email',
            'message' => 'string'
        ];
    }
}