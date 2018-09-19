<ul class="sitemap">
    @if (count($pages))
        @foreach($pages as $page)
            <li>
                <a href="{{ route('page.show', ['alias' => $page->alias]) }}">{{ $page->name }}</a>
                @if (strstr($page->text, 'articles') && count($articles))
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ route('article.show', ['alias' => $article->alias]) }}">{{ $article->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if (strstr($page->text, 'ready_solutions') && count($readySolutions))
                    <ul>
                        @foreach($readySolutions as $readySolution)
                            <li><a href="{{ route('ready_solution.show', ['alias' => $readySolution->alias]) }}">{{ $readySolution->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
                @if ($page->template == 'page.catalog' && count($catalogs))
                    <ul>
                        @foreach($catalogs as $catalog)
                            <li>
                                <a href="{{ route('catalog.show', ['alias' => $catalog->alias]) }}">{{ $catalog->name }}</a>
                                @if (count($catalog->catalogs))
                                    <ul>
                                        @foreach ($catalog->catalogs as $subCatalog)
                                            <li>
                                                <a href="{{ route('catalog.sub', ['catalog' => $catalog->alias, 'alias' => $subCatalog->alias]) }}">{{ $subCatalog->name }}</a>
                                                @if (count($subCatalog->products))
                                                    <ul>
                                                        @foreach($subCatalog->products as $product)
                                                            <li><a href="{{ route('catalog_product.show',['alias' => $product->alias]) }}">{{ $product->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                @if (count($catalog->products))
                                    <ul>
                                        @foreach($catalog->products as $product)
                                            <li><a href="{{ route('catalog_product.show',['alias' => $product->alias]) }}">{{ $product->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    @endif
</ul>