<?php

namespace App\Http\Controllers;

use App\Domain\CatalogProduct\Queries\GetCatalogProductByAliasQuery;

/**
 * Class CatalogProductController
 * @package App\Http\Controllers
 */
class CatalogProductController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $product = $this->dispatch(new GetCatalogProductByAliasQuery($alias));

        return view('product.index', [
            'product' => $product
        ]);
    }
}
