<?php

namespace App\Http\Requests;

use App\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('post_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'title'         => [
                'required'],
            'categories_id' => [
                'required',
                'integer'],
            'content'       => [
                'required'],
            'tags.*'        => [
                'integer'],
            'tags'          => [
                'array'],
            'author_id'     => [
                'required',
                'integer'],
        ];

    }
}
