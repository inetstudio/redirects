<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\StoreRequestContract;

class StoreRequest extends FormRequest implements StoreRequestContract
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'uri.required' => 'Поле «Источник» обязательно для заполнения',
            'uri.max' => 'Поле «Источник» не должно превышать 1024 символа',
            'destination.required' => 'Поле «Назначение» обязательно для заполнения',
            'destination.max' => 'Поле «Назначение» не должно превышать 1024 символа',
            'status.required' => 'Поле «Статус» обязательно для заполнения',
            'status.integer' => 'Поле «Статус» должно содержать числовое значение',
            'status.in' => 'Поле «Статус» содержит некорректное значение',
        ];
    }

    public function rules(): array
    {
        return [
            'uri' => [
                'required',
                'max:1024'
            ],
            'destination' => [
                'required',
                'max:1024'
            ],
            'status' => [
                'required',
                'integer',
                Rule::in([301, 302, 303, 307, 308]),
            ],
        ];
    }
}
