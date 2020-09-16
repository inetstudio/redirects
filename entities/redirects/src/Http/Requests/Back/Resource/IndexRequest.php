<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource;

use Illuminate\Foundation\Http\FormRequest;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\IndexRequestContract;

class IndexRequest extends FormRequest implements IndexRequestContract
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [];
    }

    public function rules(): array
    {
        return [];
    }
}
