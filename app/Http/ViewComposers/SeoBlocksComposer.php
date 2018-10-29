<?php

namespace App\Http\ViewComposers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\SeoBlock\Queries\GetAllSeoBlocksQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class SeoBlocksComposer
 * @package App\Http\ViewComposers
 */
class SeoBlocksComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $seoBlocks = $this->dispatch(new GetAllSeoBlocksQuery());

        $reindexed = $seoBlocks->mapWithKeys(function ($item) {
            return [$item->sys_name => $item->value];
        });

        $view->with('seoBlocks', $reindexed);
    }
}