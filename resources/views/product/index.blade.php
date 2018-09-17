@extends('layouts.app')

@section('title', $product->title)
@section('description', $product->description)
@section('keywords', $product->keywords)

@section('content')

    <section class="breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title"></p>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li><a href="{{ route('page.show', ['alias' => 'catalog']) }}">Каталог</a></li>
                    @if ($product->catalog->catalog)
                        <li><a href="{{ route('catalog.show', ['catalog' => $product->catalog->catalog->alias]) }}">{{ $product->catalog->catalog->name }}</a></li>
                    @endif
                    <li><a href="{{ route('catalog.sub', ['catalog' => $product->catalog->catalog->alias, 'alias' => $product->catalog->alias]) }}">{{ $product->catalog->name }}</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-sm bg-default">
        <div class="container">
            <div class="row row-60">
                <div class="col-md-6 col-lg-5">
                    @if (count($product->images))
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" data-photo-swipe-gallery="gallery">
                        @foreach ($product->images as $image)
                            <div class="item">
                                <a class="img-thumbnail-variant-2" href="{{ asset('storage/product/' . $product->id . '/' . $image->basename . '.' . $image->ext) }}" data-photo-swipe-item="" data-size="600x600">
                                    <figure>
                                        <img src="{{ asset('storage/product/' . $product->id . '/' . $image->basename . '.' . $image->ext) }}" alt="{{ $image->alt }}" title="{{ $image->title }}" width="535" height="535"/>
                                    </figure>
                                    <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1">
                        @foreach ($product->images as $image)
                            <div class="item">
                                <img src="{{ asset('storage/product/' . $product->id . '/' . $image->basename . '_thumb.' . $image->ext) }}" alt="" width="89" height="89"/>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="product-single">
                        <div class="heading-4">{{ $product->name }}</div>
                        @if ($product->price)
                            <p class="product-price"><span>{{ number_format($product->price, 0, '', ' ') }}</span></p>
                        @endif
                        <div class="product-text">
                            {!! $product->text !!}
                        </div>
                        <div class="group group-middle">
                            <button class="button button-primary button-icon button-icon-left" data-toggle="modal" data-target="#modalCost">
                                <span class="icon icon-md linear-icon-chevron-right"></span><span>Узнать стоимость</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav-custom nav-custom-tabs nav-custom__align-left nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">DESCRIPTION</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">ADDITIONAL INFORMATION</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">REVIEWS (1)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <div class="row row-60">
                                <div class="col-md-12">
                                    ///tab-01
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-2">
                            <div class="row row-60">
                                <div class="col-md-12">
                                    ///tab-02
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-3">
                            <div class="row row-60">
                                <div class="col-md-12">
                                    ///tab-03
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider-->
    <div class="container">
        <div class="divider"></div>
    </div>

    @if (count($product->relativeProducts))
        <section class="section-sm bg-default">
            <div class="container text-center">
                <div class="heading-5">Сопутствующие товары</div>
                <!-- Owl Carousel-->
                <div class="owl-carousel carousel-product" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-stage-padding="0" data-loop="false" data-margin="50" data-mouse-drag="false" data-nav="true">
                    @foreach ($product->relativeProducts as $relativeProduct)
                        <div class="item">
                            <div class="product product-grid">
                                <div class="product-img-wrap">
                                    @if ($relativeProduct->images->first())
                                        <a href="{{ route('catalog_product.show', ['alias' => $relativeProduct->alias]) }}">
                                            <img src="{{ asset('storage/product/' . $relativeProduct->id . '/' . $relativeProduct->images->first()->basename . '.' . $relativeProduct->images->first()->ext) }}" alt="{{ $relativeProduct->images->first()->alt }}" title="{{ $relativeProduct->images->first()->title }}" width="300" height="300"/>
                                        </a>
                                    @endif
                                    <div class="product-label-wrap"><span></span></div>
                                </div>
                                <div class="product-caption">
                                    <div class="heading-6" class="product-title">
                                        <a href="{{ route('catalog_product.show', ['alias' => $relativeProduct->alias]) }}">
                                            {{ $relativeProduct->name }}
                                        </a>
                                    </div>
                                    @if ($relativeProduct->price)
                                        <p class="product-price"><span>{{ number_format($relativeProduct->price, 0, '', ' ') }}</span></p>
                                    @endif
                                    <a class="button-black button button-icon button-icon-left" href="{{ route('catalog_product.show', ['alias' => $relativeProduct->alias]) }}">
                                        <span class="icon icon-md linear-icon-chevron-right"></span><span>Подробнее</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Modal register window-->
    <div class="modal fade" id="modalCost" role="dialog">
        <div class="modal-dialog modal-dialog_custom">
            <!-- Modal content-->
            <div class="modal-dialog__inner">
                <button class="close" type="button" data-dismiss="modal"></button>
                <div class="modal-dialog__content">
                    <div class="heading-6">Форма запроса стоимости</div>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_responsive" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">

                        <div class="form-wrap form-wrap_icon linear-icon-bag">
                            <input class="form-input" id="modal-register-product" value="{{ $product->name }}" type="text" name="product" readonly>
                            <label class="form-label" for="modal-register-product">Товар</label>
                        </div>

                        <div class="form-wrap form-wrap_icon linear-icon-user">
                            <input class="form-input" id="modal-register-fio" type="text" name="text" autocomplete="off">
                            <label class="form-label" for="modal-register-fio">Ваше имя</label>
                        </div>

                        <div class="form-wrap form-wrap_icon linear-icon-envelope">
                            <input class="form-input" id="modal-register-email" type="email" name="email" autocomplete="off">
                            <label class="form-label" for="modal-register-email">E-mail</label>
                        </div>

                        <div class="form-wrap form-wrap_icon linear-icon-telephone">
                            <input class="form-input" id="modal-register-phone" type="phone" name="phone" autocomplete="off">
                            <label class="form-label" for="modal-register-phone">Телефон</label>
                        </div>

                        <button class="button button-primary" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>

@endsection