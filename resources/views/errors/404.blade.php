@extends('layouts.app')

@section('title', '404 - Страница не найдена')
@section('description', '404 - Страница не найдена')
@section('keywords', '404 - Страница не найдена')

@section('content')
    <section class="breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title">404 page</p>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">404 page</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="text-center">
        <section class="section parallax-container" data-parallax-img="images/bg-image-3.jpg">
            <div class="parallax-content parallax-header rd-parallax-light">
                <div class="parallax-header__inner">
                    <div class="parallax-header__content">
                        <div class="container">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-10 col-xl-8">
                                    <h2>Страница не найдена</h2>
                                    <a class="button button-black" href="{{ route('page.show') }}">Вернуться на Главную</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
@stop