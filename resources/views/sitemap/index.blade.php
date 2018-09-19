{!! '<'.'?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    @if (count($pages))
        @foreach($pages as $page)
        <url>
            <loc>{{ route('page.show', ['alias' => str_replace('index', '', $page->alias)]) }}</loc>
            <lastmod>{{ Illuminate\Support\Carbon::parse($page->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>{{ $page->alias == 'index' ? 1 : 0.9 }}</priority>
        </url>
        @endforeach
    @endif
    @if (count($readySolutions))
        @foreach($readySolutions as $readySolution)
            <url>
                <loc>{{ route('ready_solution.show', ['alias' => $readySolution->alias]) }}</loc>
                <lastmod>{{ Illuminate\Support\Carbon::parse($readySolution->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endif
    @if (count($articles))
        @foreach($articles as $article)
            <url>
                <loc>{{ route('article.show', ['alias' => $article->alias]) }}</loc>
                <lastmod>{{ Illuminate\Support\Carbon::parse($article->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endif
    @if (count($catalogs))
        @foreach($catalogs as $catalog)
            <url>
                <loc>{{ route('catalog.show', ['alias' => $catalog->alias]) }}</loc>
                <lastmod>{{ Illuminate\Support\Carbon::parse($catalog->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.9</priority>
            </url>
            @if (count($catalog->catalogs))
                @foreach ($catalog->catalogs as $subCatalog)
                    <url>
                        <loc>{{ route('catalog.sub', ['catalog' => $catalog->alias, 'alias' => $subCatalog->alias]) }}</loc>
                        <lastmod>{{ Illuminate\Support\Carbon::parse($subCatalog->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
                        <changefreq>daily</changefreq>
                        <priority>0.9</priority>
                    </url>
                @endforeach
            @endif
        @endforeach
    @endif
    @if (count($products))
        @foreach($products as $product)
            <url>
                <loc>{{ route('catalog_product.show', ['alias' => $product->alias]) }}</loc>
                <lastmod>{{ Illuminate\Support\Carbon::parse($product->updated_at)->format("Y-m-d\\TH:i:sP") }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endif
</urlset>