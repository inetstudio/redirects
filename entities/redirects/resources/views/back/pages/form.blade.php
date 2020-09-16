@php
    /** @var InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract $item */

    $title = ($item['id']) ? 'Редактирование редиректа' : 'Создание редиректа';
@endphp

@extends('admin::back.layouts.app')

@section('title', $title)

@section('content')

    @push('breadcrumbs')
        @include('admin.module.redirects-package.redirects::back.partials.breadcrumbs.form')
    @endpush

    <div class="wrapper wrapper-content">
        <div class="ibox">
            <div class="ibox-title">
                <a class="btn btn-sm btn-white" href="{{ route('back.redirects-package.redirects.index') }}">
                    <i class="fa fa-arrow-left"></i> Вернуться назад
                </a>
            </div>
        </div>

        {!! Form::info() !!}

        {!! Form::open(['url' => (! $item['id']) ? route('back.redirects-package.redirects.store') : route('back.redirects-package.redirects.update', [$item['id']]), 'id' => 'mainForm']) !!}

            @if ($item['id'])
                {{ method_field('PUT') }}
            @endif

            {!! Form::hidden('id', $item['id'] ?? 0, ['id' => 'object-id']) !!}

            {!! Form::hidden('type', get_class($item), ['id' => 'object-type']) !!}

            <div class="ibox">
                <div class="ibox-title">
                    {!! Form::buttons('', '', ['back' => 'back.redirects-package.redirects.index']) !!}
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-group float-e-margins" id="mainAccordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#mainAccordion" href="#collapseMain"
                                               aria-expanded="true">Основная информация</a>
                                        </h5>
                                    </div>
                                    <div id="collapseMain" class="collapse show" aria-expanded="true">
                                        <div class="panel-body">

                                            {!! Form::string('uri', $item['uri'], [
                                                'label' => [
                                                    'title' => 'Источник',
                                                ],
                                            ]) !!}

                                            {!! Form::string('destination', $item['destination'], [
                                                'label' => [
                                                    'title' => 'Назначение',
                                                ],
                                            ]) !!}

                                            {!! Form::dropdown('status', $item['status'] ?? 302, [
                                                'label' => [
                                                    'title' => 'Статус',
                                                ],
                                                'field' => [
                                                    'class' => 'select2-drop form-control',
                                                    'data-placeholder' => 'Выберите статус',
                                                    'style' => 'width: 100%',
                                                ],
                                                'options' => [
                                                    'values' => [
                                                        null => '',
                                                        301 => 301,
                                                        302 => 302,
                                                        303 => 303,
                                                        307 => 307,
                                                        308 => 308,
                                                    ],
                                                ],
                                            ]) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox-footer">
                    {!! Form::buttons('', '', ['back' => 'back.redirects-package.redirects.index']) !!}
                </div>
            </div>

        {!! Form::close()!!}
    </div>
@endsection
