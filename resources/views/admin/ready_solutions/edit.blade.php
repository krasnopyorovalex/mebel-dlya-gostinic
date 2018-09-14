@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.ready_solutions.index') }}">Готовые решения</a></li>
    <li class="active">Форма редактирования готового решения</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования готового решения</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.ready_solutions.update', $readySolution) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#image" data-toggle="tab">Изображение</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            @input(['name' => 'name', 'label' => 'Название', 'entity' => $readySolution])
                            @input(['name' => 'name_image', 'label' => 'Название на картинке', 'entity' => $readySolution])
                            @input(['name' => 'title', 'label' => 'Title', 'entity' => $readySolution])
                            @input(['name' => 'description', 'label' => 'Description', 'entity' => $readySolution])
                            @input(['name' => 'keywords', 'label' => 'Keywords', 'entity' => $readySolution])

                            @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $readySolution])
                            @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $readySolution])
                            @checkbox(['name' => 'in_main', 'label' => 'Отображать на главной?', 'entity' => $readySolution])
                            @checkbox(['name' => 'is_published', 'label' => 'Опубликовано?', 'entity' => $readySolution])

                            @submit_btn()
                        </div>
                        <div class="tab-pane" id="image">
                            @if ($readySolution->image)
                                <div class="panel panel-flat border-blue border-xs" id="image__box">
                                    <div class="panel-body">
                                        <img src="{{ asset($readySolution->image->path) }}" alt="" class="upload__image">

                                        <div class="btn-group btn__actions">
                                            <button data-toggle="modal" data-target="#modal_info" type="button" class="btn btn-primary btn-labeled btn-sm"><b><i class="icon-pencil4"></i></b> Атрибуты</button>

                                            <button type="button" data-href="{{ route('admin.images.destroy', ['id' => $readySolution->image->id]) }}" class="btn delete__img btn-danger btn-labeled btn-labeled-right btn-sm">Удалить <b><i class="icon-trash"></i></b></button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @imageInput(['name' => 'image', 'type' => 'file', 'entity' => $readySolution, 'label' => 'Выберите изображение на компьютере'])
                            @submit_btn()
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/laravel-ckeditor/ckeditor.js') }}"></script>
    @endpush
    @if ($readySolution->image)
        @include('layouts.partials._image_attributes_popup', ['image' => $readySolution->image])
    @endif
@endsection