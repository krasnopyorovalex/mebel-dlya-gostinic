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
            <div class="form-group">
                <input type="text" class="name__filed form-input" value="" placeholder="Ваше имя">
            </div>
            <div class="form-group">
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
                                <a href="{{ route('page.show', ['alias' => 'gallery']) }}#{{ $gallery->id }}">
                                    <img src="{{ $gallery->image->path }}" alt="{{ $gallery->image->alt }}" title="{{ $gallery->image->title }}" width="301" height="301"/>
                                </a>
                            </div>
                            <div class="thumb-corporate__caption">
                                <p class="thumb__title"><a href="{{ route('page.show', ['alias' => 'gallery']) }}#{{ $gallery->id }}">{{ $gallery->name }}</a></p>
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

    <section class="section-limit">
        <div class="row justify-content-md-center row-50">
            <div class="col-md-6 col-lg-4">
                <div class="banner-thumbnail banner-thumbnail-top bg-accent"><a href="catalog-grid.html"><img src="images/banner-5-573x432.jpg" alt="" width="573" height="432"/></a>
                    <div class="caption">
                        <p>Living Room</p>
                        <h5 class="banner-title"><a href="catalog-grid.html">Up to 30% off!            </a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="banner-thumbnail banner-thumbnail-center text-center bg-accent"><a href="catalog-grid.html"><img src="images/banner-6-573x432.jpg" alt="" width="573" height="432"/></a>
                    <div class="caption">
                        <h4 class="banner-title"><a href="catalog-grid.html">Save 49%</a></h4>
                        <p>when buying kitchen tables!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="banner-thumbnail banner-thumbnail-top"><a href="catalog-grid.html"><img src="images/banner-7-573x432.jpg" alt="" width="573" height="432"/></a>
                    <div class="caption">
                        <p>See our best furniture</p>
                        <h5 class="banner-title"><a href="catalog-grid.html">UP TO 70% OFF</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg bg-default text-center">
        <div class="container">
            <h4>Here We Post Furniture Tips,<br> Purchasing Guides and Special Offers!</h4>
            <div class="row row-60 justify-content-md-center">
                <div class="col-md-6 col-lg-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal text-center"><img src="images/post-index-1-418x315.jpg" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="image-post.html">FURNITURE STYLES PROFILE: ART DECO</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="image-post.html">
                                    <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author" href="image-post.html">by Brian Williamson</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal text-center"><img src="images/post-index-2-418x315.jpg" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="image-post.html">HOW LAIDBACK AN OFFICE CHAIR SHOULD BE?</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="image-post.html">
                                    <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author" href="image-post.html">by Brian Williamson</a></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal text-center"><img src="images/post-index-3-418x315.jpg" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="image-post.html">HOW TO FIND SUSTAINABLE FURNITURE IN THE MODERN WORLD</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="image-post.html">
                                    <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author" href="image-post.html">by Brian Williamson</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider-->
    <div class="container">
        <div class="divider"></div>
    </div>

    <section class="section-md bg-default">
        <div class="container">
            <div class="row row-60 justify-content-md-center">
                <div class="col-md-6 col-lg-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle blurb-circle_centered">
                        <div class="blurb-circle__icon"><span class="icon linear-icon-clock3"></span></div>
                        <p class="blurb__title">365-Day Home Trial</p>
                        <p>Our unique return policy will allow you to return furniture for almost a year</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle blurb-circle_centered">
                        <div class="blurb-circle__icon"><span class="icon linear-icon-truck"></span></div>
                        <p class="blurb__title">Free Shipping and Delivery</p>
                        <p>We're one of the few furniture online retailers, who offer delivery free of charge</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle blurb-circle_centered">
                        <div class="blurb-circle__icon"><span class="icon linear-icon-medal-empty"></span></div>
                        <p class="blurb__title">Lifetime Warranty</p>
                        <p>Purchasing furniture at Quali comes with longer warranty than anyone else offers!</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section-map">
        <!-- RD Google Map-->
        <div class="rd-google-map rd-google-map__model" data-zoom="15" data-y="40.643180" data-x="-73.9874068" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
            <ul class="map_locations">
                <li data-y="40.643180" data-x="-73.9874068">
                    <dl>
                        <dt>Address:</dt>
                        <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                    </dl>
                    <dl>
                        <dt>Phones:</dt>
                        <dd><a href="tel:#">(800) 123-0045</a>; <a href="tel:#">(800) 123-0046</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>We are open:</dt>
                        <dd>Mn-Fr: 10 am-8 pm</dd>
                    </dl>
                </li>
            </ul>
        </div>
    </section>
@endsection