@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('content')

    <section class="breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title"></p>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li class="active">{{ $page->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default section-limit custom__content article">
        <div class="container">
            <div class="row row-50 align-items-md-center">
                <div class="col-md-12 col-lg-12">
                    <h1>{{ $page->name }}</h1>
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </section>

@endsection