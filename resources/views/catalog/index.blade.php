@extends('layouts.app')

@section('title', $catalog->title)
@section('description', $catalog->description)
@section('keywords', $catalog->keywords)

@section('content')

    <section class="breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title"></p>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li><a href="{{ route('page.show', ['alias' => 'catalog']) }}">Каталог</a></li>
                    <li class="active">{{ $catalog->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-md bg-default custom__content article">
        <div class="container">
            <div class="row row-60 flex-lg-row-reverse">
                <div class="col-lg-9 section-divided__main section-divided__main-left">
                    <div class="section-sm">
                        <div class="row justify-content-sm-center row-70">

                            @if (count($catalog->products))
                                @foreach ($catalog->products as $product)
                                    <div class="col-md-6 col-xl-4">
                                        <div class="product product-grid">
                                            @if ($product->image)
                                                <div class="product-img-wrap">
                                                    <a href="{{ route('catalog_product.show', ['alias' => $product->alias]) }}">
                                                        <img src="{{ $product->image->path }}" alt="{{ $product->image->alt }}" title="{{ $product->image->title }}" width="300" height="300"/>
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="product-caption">
                                                <div class="product-title heading-6">
                                                    <a href="{{ route('catalog_product.show', ['alias' => $product->alias]) }}">{{ $product->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif (count($catalog->catalogs))
                                @foreach ($catalog->catalogs as $catalogItem)
                                <div class="col-md-6 col-xl-4">
                                    <div class="product product-grid">
                                        @if ($catalogItem->image)
                                        <div class="product-img-wrap">
                                            <a href="{{ route('catalog.sub', ['catalog' => $catalog->alias, 'alias' => $catalogItem->alias]) }}">
                                                <img src="{{ $catalogItem->image->path }}" alt="{{ $catalogItem->image->alt }}" title="{{ $catalogItem->image->title }}" width="300" height="300"/>
                                            </a>
                                        </div>
                                        @endif
                                        <div class="product-caption">
                                            <div class="product-title heading-6">
                                                <a href="{{ route('catalog.sub', ['catalog' => $catalog->alias, 'alias' => $catalogItem->alias]) }}">{{ $catalogItem->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            <div class="col-md-12">
                                {!! $catalog->text !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 section-divided__aside section__aside-left">
                    @includeWhen($catalogs, 'layouts.partials.catalog_list', ['catalogs' => $catalogs])
                </div>
            </div>
        </div>
    </section>

@endsection