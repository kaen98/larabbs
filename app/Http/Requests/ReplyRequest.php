<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            case 'GET':
            case 'DELETE':
            {
                // 包括 POST PUT PATCH GET DELETE
                return [
                    'content' => 'required|min:2',
                ];
            }
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
