<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource;

use Illuminate\Foundation\Http\FormRequest;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\ShowRequestContract;

class ShowRequest extends FormRequest implements ShowRequestContract
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
