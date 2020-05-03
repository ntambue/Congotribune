<?php

namespace App\Http\Requests;

use App\AdsCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAdsCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ads_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'categories_id' => [
                'required',
                'integer'],
        ];

    }
}
