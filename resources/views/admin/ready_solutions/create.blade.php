@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.ready_solutions.index') }}">Готовые решения</a></li>
    <li class="active">Форма добавления готового решения</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления готового решения</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.ready_solutions.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @selectLink(['name' => 'link', 'label' => 'Ссылка'])
                @input(['name' => 'name', 'label' => 'Название'])
                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection