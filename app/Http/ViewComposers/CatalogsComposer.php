<?php

namespace App\Http\ViewComposers;

use App\Domain\Catalog\Queries\GetAllCatalogsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CatalogsComposer
 * @package App\Http\ViewComposers
 */
class CatalogsComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $catalogs = $this->dispatch(new GetAllCatalogsQuery());

        $view->with('catalogs', $catalogs);
    }
}