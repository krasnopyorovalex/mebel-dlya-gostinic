<?php

namespace App\Http\ViewComposers;

use App\Domain\Gallery\Queries\GetAllGalleriesQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class GalleriesComposer
 * @package App\Http\ViewComposers
 */
class GalleriesComposer
{

    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $galleries = $this->dispatch(new GetAllGalleriesQuery());

        $view->with('galleries', $galleries);
    }
}