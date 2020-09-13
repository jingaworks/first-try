<?php

namespace App\Http\Requests;

use App\Models\Profile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('profile_edit');
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
                'unique:profiles,phone,' . request()->route('profile')->id,
            ],
            'credit'   => [
                'numeric',
            ],
        ];
    }
}
