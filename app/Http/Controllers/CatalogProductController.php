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

        $product->tabs = $product->tabs->mapWithKeys(function ($item) {
            return [$item->tab_id => $item->value];
        });

        return view('product.index', [
            'product' => $product
        ]);
    }
}
