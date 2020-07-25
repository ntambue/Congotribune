<?php

namespace App\Http\Requests;

use App\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'             => [
                'required',
            ],
            'short_description' => [
                'required',
            ],
            'slug'              => [
                'required',
                'unique:posts,slug,' . request()->route('post')->id,
            ],
            'category_id'       => [
                'required',
                'integer',
            ],
            'content'           => [
                'required',
            ],
            'tags.*'            => [
                'integer',
            ],
            'tags'              => [
                'array',
            ],
        ];
    }
}
