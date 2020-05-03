<?php

namespace App\Http\Requests;

use App\IndexAd;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateIndexAdRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('index_ad_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
        ];

    }
}
