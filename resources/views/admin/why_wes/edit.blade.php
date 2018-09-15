@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.why_wes.index') }}">Почему мы?</a></li>
    <li class="active">Форма редактирования</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.why_wes.update', $whyWe) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                @selectLink(['name' => 'link', 'label' => 'Ссылка', 'entity' => $whyWe])
                @input(['name' => 'name', 'label' => 'Название', 'entity' => $whyWe])
                @input(['name' => 'icon', 'label' => 'сss-класс иконки', 'entity' => $whyWe])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection