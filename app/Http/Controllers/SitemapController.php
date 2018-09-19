<?php

namespace App\Http\Controllers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Catalog\Queries\GetAllCatalogsQuery;
use App\Domain\CatalogProduct\Queries\GetAllCatalogProductsQuery;
use App\Domain\Page\Queries\GetAllPagesQuery;
use App\Domain\ReadySolution\Queries\GetAllReadySolutionsQuery;

/**
 * Class SitemapController
 * @package App\Http\Controllers
 */
class SitemapController extends Controller
{
    public function xml()
    {
        $pages = $this->dispatch(new GetAllPagesQuery(true));
        $readySolutions = $this->dispatch(new GetAllReadySolutionsQuery(false, true));
        $articles = $this->dispatch(new GetAllArticlesQuery(false, false, true));
        $catalogs = $this->dispatch(new GetAllCatalogsQuery());
        $products = $this->dispatch(new GetAllCatalogProductsQuery(null, null, true));

        return response()
            ->view('sitemap.index', [
                'pages' => $pages,
                'readySolutions' => $readySolutions,
                'articles' => $articles,
                'catalogs' => $catalogs,
                'products' => $products
            ], 200)
            ->header('Content-Type', 'text/xml');
    }
}
