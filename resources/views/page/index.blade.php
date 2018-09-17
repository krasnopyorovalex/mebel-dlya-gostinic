@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('content')

    @includeWhen($page->slider, 'layouts.partials.slider', ['page' => $page])

    @includeWhen($readySolutions, 'layouts.partials.ready_solutions', ['readySolutions' => $readySolutions])

    @includeWhen($countAbout, 'layouts.partials.count_about', ['countAbout' => $countAbout])

    <section class="section-limit bg-gray-lighter bg-image css__custom-banner" style="background-image: url({{ $banners->get(1)->image->path }})">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 section-lg">
                    <div class="wow fadeInUpSmall heading-2" data-wow-delay=".2s" data-wow-duration="1.2s">{{ $banners->get(1)->name }}</div>
                    <p class="big wow fadeInUpSmall" data-wow-delay=".5s" data-wow-duration="1.2s">{{ strip_tags($banners->get(1)->text) }}</p>
                    <a class="banner-link wow fadeInUpSmall" href="{{ $banners->get(1)->link }}" data-wow-delay=".7s" data-wow-duration="1.2s">{{ $banners->get(1)->btn_text }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default">
        <div class="container text-center">
            <div class="heading-4">
                <a href="{{ route('page.show', ['alias' => 'catalog']) }}">Каталог мебели</a>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-vertical row no-gutters">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-custom nav-custom-tabs col-md-3">
                    @foreach ($catalogs as $catalog)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('catalog.show', ['alias' => $catalog->alias]) }}">{{ $catalog->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content text-left col-md-9">
                    <div class="tab-pane fade show active">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel carousel-product" data-items="1" data-md-items="1" data-lg-items="2" data-xl-items="3" data-stage-padding="0" data-loop="false" data-margin="50" data-mouse-drag="false" data-nav="true">
                            @foreach ($catalogs as $catalog)
                            <div class="item">
                                <div class="product product-grid">
                                    <div class="product-img-wrap">
                                        <a href="{{ route('catalog.show', ['alias' => $catalog->alias]) }}">
                                            <img src="{{ $catalog->image->path }}" alt="{{ $catalog->image->alt }}" title="{{ $catalog->image->title }}" width="300" height="300"/>
                                        </a>
                                    </div>
                                    <div class="product-caption">
                                        <p>{{ $catalog->sub_title }}</p>
                                        <div class="product-title heading-6"><a href="{{ route('catalog.show', ['alias' => $catalog->alias]) }}">{{ $catalog->name }}</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="recall__me">
        <form action="#" method="post">
            <div class="form-group form-wrap_icon linear-icon-man">
                <input type="text" class="name__filed form-input" value="" placeholder="Ваше имя">
            </div>
            <div class="form-group form-wrap_icon linear-icon-envelope">
                <input type="email" class="email__field form-input" value="" placeholder="Ваше e-mail">
            </div>
            <div class="form-group">
                <button class="button button-black" type="submit">Отправить</button>
            </div>
        </form>
    </section>
    <!-- /.recall__me -->

    <!-- Divider-->
    <div class="container">
        <div class="divider"></div>
    </div>

    <section class="section-lg bg-default text-center">
        <div class="container">
            <div class="heading-4"><a href="{{ route('page.show', ['alias' => 'gallery']) }}">Наши работы</a></div>
            <div class="row row-60">
                @foreach ($galleries as $gallery)
                    <div class="col-md-6 col-xl-3">
                        <!-- Thumb corporate-->
                        <div class="thumb thumb-corporate">
                            <div class="thumb-corporate__main">
                                <a href="{{ route('page.show', ['alias' => 'portfolio']) }}#portfolio-{{ $gallery->id }}">
                                    <img src="{{ $gallery->image->path }}" alt="{{ $gallery->image->alt }}" title="{{ $gallery->image->title }}" width="301" height="301"/>
                                </a>
                            </div>
                            <div class="thumb-corporate__caption">
                                <p class="thumb__title"><a href="{{ route('page.show', ['alias' => 'portfolio']) }}#portfolio-{{ $gallery->id }}">{{ $gallery->name }}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Divider-->
    <div class="container">
        <div class="divider"></div>
    </div>

    @includeWhen($whyWes, 'layouts.partials.why_we', ['whyWes' => $whyWes])

    <section class="section-limit bg-gray-lighter bg-image css__custom-banner" style="background-image: url({{ $banners->get(1)->image->path }})">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 section-lg">
                    <div class="wow fadeInUpSmall heading-2" data-wow-delay=".2s" data-wow-duration="1.2s">{{ $banners->get(2)->name }}</div>
                    <p class="big wow fadeInUpSmall" data-wow-delay=".5s" data-wow-duration="1.2s">{{ strip_tags($banners->get(2)->text) }}</p>
                    <a class="banner-link wow fadeInUpSmall" href="{{ $banners->get(2)->link }}" data-wow-delay=".7s" data-wow-duration="1.2s">{{ $banners->get(2)->btn_text }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default text-center">
        <div class="container">
            <div class="heading-4"><a href="{{ route('page.show', ['alias' => 'articles']) }}">Статьи/О мебели</a></div>
            <div class="row row-60 justify-content-md-center">

                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4">
                        <!-- Post classic-->
                        <article class="post-classic post-minimal text-center">
                            <img src="{{ $article->image->path }}" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}" width="418" height="315"/>
                            <div class="post-classic-title">
                                <div class="heading-6"><a href="{{ route('article.show', ['alias' => $article->alias]) }}">{{ $article->name }}</a></div>
                            </div>
                            <div class="post-meta">
                                <div class="group">
                                    <time datetime="{{ Illuminate\Support\Carbon::parse($article->published_at)->format('Y-m-d h:i:s') }}">{{ Illuminate\Support\Carbon::parse($article->published_at)->format('d M Y') }}</time>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Divider-->
    <div class="container">
        <div class="divider"></div>
    </div>

    <section class="section-sm bg-default content">
        <div class="container">
            <div class="text-center">
                <h1>{{ $page->name }}</h1>
            </div>
            <div class="row row-60 justify-content-md-center">
                <div class="col-md-12 col-lg-12">
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </section>

    {{--<section class="section-map">--}}
        {{--<script type="text/javascript" charset="utf-8" async="" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Mzb64TxnY02RHItjvDXPjd2n8H3WmkRV&amp;width=100%&amp;height=451&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>--}}
    {{--</section>--}}
@endsection