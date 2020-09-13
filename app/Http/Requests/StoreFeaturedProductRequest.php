<?php

namespace App\Http\Requests;

use App\Models\FeaturedProduct;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFeaturedProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('featured_product_create');
    }

    public function rules()
    {
        return [
            'views' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
