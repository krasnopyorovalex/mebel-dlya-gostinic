<?php

namespace App\Http\Controllers;

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

        return view('catalog.index', ['catalog' => $catalog]);
    }
}
