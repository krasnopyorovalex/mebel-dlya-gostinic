<section class="section-lg bg-default text-center">
    <div class="container">
        <div class="row justify-content-md-center row-50">
            @foreach ($countAbout as $ca)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!-- Box counter-->
                    <article class="box-counter">
                        <div class="box-counter__icon {{ $ca->icon }}"></div>
                        <div class="box-counter__wrap">
                            <div class="counter">{{ $ca->count }}</div>
                        </div>
                        <p class="box-counter__title">{{ $ca->name }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>