@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.why_wes.index') }}">Почему мы?</a></li>
    <li class="active">Форма добавления</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.why_wes.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @selectLink(['name' => 'link', 'label' => 'Ссылка'])
                @input(['name' => 'name', 'label' => 'Название'])
                @input(['name' => 'icon', 'label' => 'сss-класс иконки'])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection