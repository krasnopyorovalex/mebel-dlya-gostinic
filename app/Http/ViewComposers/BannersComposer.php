<?php

namespace App\Http\ViewComposers;

use App\Domain\Banner\Queries\GetAllBannersQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BannersComposer
 * @package App\Http\ViewComposers
 */
class BannersComposer
{

    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        /** @var Collection $collection */
        $banners = $this->dispatch(new GetAllBannersQuery());

        $reindexed = $banners->mapWithKeys(function ($item) {
            return [$item->id => $item];
        });

        $view->with('banners', $reindexed);
    }
}