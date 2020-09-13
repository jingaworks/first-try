<?php

namespace App\Http\Requests;

use App\Models\Profile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('profile_create');
    }

    public function rules()
    {
        return [
            'username' => [
                'string',
                'nullable',
            ],
            'phone'    => [
                'string',
                'required',
                'unique:profiles',
            ],
            'credit'   => [
                'numeric',
            ],
        ];
    }
}
