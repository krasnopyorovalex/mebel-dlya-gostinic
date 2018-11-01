<?php

namespace App\Http\Controllers;

use App\CatalogProduct;
use App\Domain\Catalog\Queries\GetCatalogByAliasQuery;

/**
 * Class CatalogController
 * @package App\Http\Controllers
 */
class CatalogController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $catalog = $this->dispatch(new GetCatalogByAliasQuery($alias));
        $products = $catalog->products()->paginate(1);

        return view('catalog.index', ['catalog' => $catalog, 'products' => $products]);
    }

    /**
     * @param string $catalog
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sub(string $catalog, string $alias)
    {
        $catalog = $this->dispatch(new GetCatalogByAliasQuery($alias));
        $products = $catalog->products()->paginate(CatalogProduct::PER_PAGE);

        return view('catalog.index', ['catalog' => $catalog, 'products' => $products]);
    }
}
