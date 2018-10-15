@if ($portfolios)
    <div class="text-md-center">
        <ul class="list-tags">
            @foreach ($portfolios as $portfolio)
                <li><a href="#" data-custom-scroll-to="portfolio-{{ $portfolio->id }}">{{ $portfolio->name }}</a></li>
            @endforeach
        </ul>

        <div class="portfolio__items row justify-content-sm-center">
            @foreach ($portfolios as $portfolio)
                <div id="portfolio-{{ $portfolio->id }}"></div>
                <div class="portfolio__items-title">
                    {{ $portfolio->name }}
                </div>
                <!-- /.portfolio__items-title -->

                @if (count($portfolio->images))
                    <div class="row justify-content-sm-center portfolio__items-{{ $portfolio->id }}">
                        @foreach ($portfolio->images as $image)
                            <div class="col-md-4 col-xl-4">
                                <div class="product product-grid">
                                    <div class="product-img-wrap">
                                        @if ($loop->index > 2)
                                            <a href="{{ asset('storage/gallery/' . $portfolio->id . '/' . $image->basename . '.' . $image->ext) }}" data-lightbox="portfolio-{{ $portfolio->id }}"  data-title="{{ $image->name }}">
                                                <img src="#" class="must__show" data-src="{{ asset('storage/gallery/' . $portfolio->id . '/' . $image->basename . '.' . $image->ext) }}" alt="{{ $image->alt }}" title="{{ $image->title }}">
                                            </a>
                                        @else
                                            <a href="{{ asset('storage/gallery/' . $portfolio->id . '/' . $image->basename . '.' . $image->ext) }}" data-lightbox="portfolio-{{ $portfolio->id }}">
                                                <img src="{{ asset('storage/gallery/' . $portfolio->id . '/' . $image->basename . '.' . $image->ext) }}" alt="{{ $image->alt }}" title="{{ $image->title }}">
                                            </a>
                                        @endif
                                    </div>
                                    @if ($image->name)
                                        <div class="product-caption">
                                            <div class="heading-6">{{ $image->name }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                        @if (count($portfolio->images) > 3)
                            <div class="btn__more-wrap">
                                <div class="btn__more" title="Загрузить еще изображения" data-portfolio-id="{{ $portfolio->id }}">
                                    Показать еще
                                </div>
                                <!-- /.btn__more -->
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <!-- /.portfolio__items -->
    </div>
@endif