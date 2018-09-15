@extends('layouts.app')

@section('title', $article->title)
@section('description', $article->description)
@section('keywords', $article->keywords)

@section('content')

    <section class="breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title"></p>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li><a href="{{ route('page.show', ['alias' => 'articles']) }}">Статьи</a></li>
                    <li class="active">{{ $article->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-default section-md custom__content article">
        <div class="container">
            <div class="row row-60 justify-content-sm-center">
                <div class="col-lg-12 section-divided__main">
                    <section class="section-sm post-single-body">
                        <h1>{{ $article->name }}</h1>
                        {!! $article->text !!}
                    </section>
                </div>
            </div>
        </div>
    </section>

@endsection