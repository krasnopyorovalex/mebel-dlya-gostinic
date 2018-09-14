@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)

@section('content')

    @includeWhen($page->slider, 'layouts.partials.slider', ['page' => $page])

    <section class="section-sm section-limit">
        <div class="row justify-content-sm-center row-50">
            <div class="col-md-4">
                <div class="banner-thumbnail banner-thumbnail-top"><a href="catalog-grid.html"><img src="images/banner-2-573x432.jpg" alt="" width="573" height="432"/></a></div>
            </div>
            <div class="col-md-4">
                <div class="banner-thumbnail banner-thumbnail-center"><a href="catalog-grid.html"><img src="images/banner-4-573x432.jpg" alt="" width="573" height="432"/></a></div>
            </div>
            <div class="col-md-4">
                <div class="banner-thumbnail banner-thumbnail-center"><a href="catalog-grid.html"><img src="images/banner-3-573x432.jpg" alt="" width="573" height="432"/></a></div>
            </div>
        </div>
    </section>
    <section class="section-lg bg-default">
        <div class="container text-center">
            <h4>Furniture on Fire - Hot Sales!</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel carousel-product" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-stage-padding="0" data-loop="false" data-margin="50" data-mouse-drag="false" data-nav="true">
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/italian-furniture-contemporary-mix-steel-base-wooden-table-top-dining-table-by-sedit-2-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Italian Furniture Contemporary Yellow Club Chair</a></h6>
                            <p class="product-price"><span>87</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/modern-small-cucciolo-2-seater-sofa-domingo-salotti-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">The Natural Light White Square Table Lamp</a></h6>
                            <p class="product-price"><span>16</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/my-italian-living-contemporary-manila-leather-blue-dining-chair-by-imperial-line-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Hobo Design Coup Grey Office Chair</a></h6>
                            <p class="product-price"><span>44</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/Porta-venezia-kitchen-bar-dining-stool-by-infiniti-design-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Modern Furniture Lucinda Orange Stacking Chair</a></h6>
                            <p class="product-price"><span>82</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/santarossa_plastic_transparent_glossy_chair-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Coriander Designs Clarke Wood Lounge Chair</a></h6>
                            <p class="product-price"><span>40</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/slamp-lighting-italain-designer-floor-lamp-contemporary-design-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">CB2 Furniture Modern White Hi-Gloss Desk</a></h6>
                            <p class="product-price"><span>43</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/garda-square-sideboard-for-living-and-dining-room-by-dallagnese-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span class="featured">Featured</span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Larssen Design Black and White Retro Egg Chair</a></h6>
                            <p class="product-price"><span>48</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/emma-chairs-and-table-for-kitchen-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span class="new">New</span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">EcoFurniture White Leather Office Chair</a></h6>
                            <p class="product-price"><span>69</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-limit bg-gray-lighter bg-image bg-image-8">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 section-lg">
                    <h2 class="wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="1.2s">Get our Catalogue</h2>
                    <p class="big wow fadeInUpSmall" data-wow-delay=".5s" data-wow-duration="1.2s">Receive free monthly catalogue showcasing the best in modern furniture design!</p><a class="banner-link wow fadeInUpSmall" href="catalog-grid.html" data-wow-delay=".7s" data-wow-duration="1.2s">Shop now!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg bg-default">
        <div class="container text-center">
            <h4>Most Popular Items</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel carousel-product" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-stage-padding="0" data-loop="false" data-margin="50" data-mouse-drag="false" data-nav="true">
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/santarossa_plastic_transparent_glossy_chair-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Coriander Designs Clarke Wood Lounge Chair</a></h6>
                            <p class="product-price"><span>40</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/slamp-lighting-italain-designer-floor-lamp-contemporary-design-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">CB2 Furniture Modern White Hi-Gloss Desk</a></h6>
                            <p class="product-price"><span>43</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/garda-square-sideboard-for-living-and-dining-room-by-dallagnese-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span class="featured">Featured</span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Larssen Design Black and White Retro Egg Chair</a></h6>
                            <p class="product-price"><span>48</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/emma-chairs-and-table-for-kitchen-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span class="new">New</span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">EcoFurniture White Leather Office Chair</a></h6>
                            <p class="product-price"><span>69</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/italian-furniture-contemporary-mix-steel-base-wooden-table-top-dining-table-by-sedit-2-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Italian Furniture Contemporary Yellow Club Chair</a></h6>
                            <p class="product-price"><span>87</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/modern-small-cucciolo-2-seater-sofa-domingo-salotti-1-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">The Natural Light White Square Table Lamp</a></h6>
                            <p class="product-price"><span>16</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/my-italian-living-contemporary-manila-leather-blue-dining-chair-by-imperial-line-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Hobo Design Coup Grey Office Chair</a></h6>
                            <p class="product-price"><span>44</span>
                            </p><a class="button-black button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                            <ul class="rating-list">
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-secondary-4"></span></li>
                                <li><span class="icon linear-icon-star icon-gray-4"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product product-grid">
                        <div class="product-img-wrap"><img src="images/Porta-venezia-kitchen-bar-dining-stool-by-infiniti-design-300x300.jpg" alt="" width="300" height="300"/>
                            <div class="product-icon-wrap"><span class="icon icon-md linear-icon-heart" data-toggle="tooltip" data-original-title="Add to Wishlist"></span><span class="icon icon-md linear-icon-balance" data-toggle="tooltip" data-original-title="Add to Compare"></span></div>
                            <div class="product-label-wrap"><span></span></div>
                        </div>
                        <div class="product-caption">
                            <ul class="product-categories">
                                <li><a href="#">Living Room</a></li>
                                <li><a href="#">Dining room</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                            <h6 class="product-title"><a href="single-product.html">Modern Furniture Lucinda Orange Stacking Chair</a></h6>
                            <p class="product-price"><span>82</span>
                            </p><a class="button-gray-light-outline button button-icon button-icon-left" href="single-product.html"><span class="icon icon-md linear-icon-magic-wand icon-gray"></span><span>Select options</span></a>
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

    <section class="section-lg bg-default text-center">
        <div class="container">
            <h4>Top Furniture Categories</h4>
            <div class="row row-60">
                <div class="col-md-6 col-xl-3">
                    <!-- Thumb corporate-->
                    <div class="thumb thumb-corporate">
                        <div class="thumb-corporate__main"><img src="images/categories-1-301x301.jpg" alt="" width="301" height="301"/>
                        </div>
                        <div class="thumb-corporate__caption">
                            <p class="thumb__title"><a href="catalog-grid.html">Living Room</a></p>
                            <p class="thumb__subtitle">25 products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <!-- Thumb corporate-->
                    <div class="thumb thumb-corporate">
                        <div class="thumb-corporate__main"><img src="images/categories-2-301x301.jpg" alt="" width="301" height="301"/>
                        </div>
                        <div class="thumb-corporate__caption">
                            <p class="thumb__title"><a href="catalog-grid.html">Dining room</a></p>
                            <p class="thumb__subtitle">25 products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <!-- Thumb corporate-->
                    <div class="thumb thumb-corporate">
                        <div class="thumb-corporate__main"><img src="images/categories-3-301x301.jpg" alt="" width="301" height="301"/>
                        </div>
                        <div class="thumb-corporate__caption">
                            <p class="thumb__title"><a href="catalog-grid.html">Bedroom</a></p>
                            <p class="thumb__subtitle">25 products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <!-- Thumb corporate-->
                    <div class="thumb thumb-corporate">
                        <div class="thumb-corporate__main"><img src="images/categories-4-301x301.jpg" alt="" width="301" height="301"/>
                        </div>
                        <div class="thumb-corporate__caption">
                            <p class="thumb__title"><a href="catalog-grid.html">Office</a></p>
                            <p class="thumb__subtitle">25 products</p>
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