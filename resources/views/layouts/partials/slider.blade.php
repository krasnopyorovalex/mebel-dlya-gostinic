<section>
    <div class="swiper-container swiper-slider" data-simulate-touch="false" data-loop="false" data-autoplay="false">
        <div class="swiper-wrapper">
            @foreach($page->slider->images as $image)
                <div class="swiper-slide bg-gray-lighter" data-slide-bg="{{ asset($image->getImage()) }}">
                    <div class="swiper-slide-caption text-center">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-7">
                                    @if ($image->name)
                                        <div class="swiper-decor">
                                            <div class="as_h1" data-caption-animate="fadeInUpSmall">
                                                <a href="{{ $image->link }}">
                                                    <span>{{ $image->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev linear-icon-chevron-left"></div>
        <div class="swiper-button-next linear-icon-chevron-right"></div>
    </div>
</section>