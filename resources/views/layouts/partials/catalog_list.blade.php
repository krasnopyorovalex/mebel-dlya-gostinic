<!-- Categories-->
<section class="section-sm">
    <div class="heading-5">Категории</div>
    <ul class="small list category__list">
        @foreach ($catalogs as $catalog)
            <li class="{{ (request('alias') == $catalog->alias || request('catalog') == $catalog->alias) ? 'is_opened': ''}} ">
                <a href="#">{{ $catalog->name }}</a>
                @if (count($catalog->catalogs))
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <ul>
                        @foreach ($catalog->catalogs as $subCatalog)
                            <li><a href="{{ route('catalog.sub', ['catalog' => $catalog->alias, 'alias' => $subCatalog->alias]) }}">{{ $subCatalog->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</section>