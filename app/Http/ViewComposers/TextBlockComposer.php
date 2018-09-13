<?php

namespace App\Http\ViewComposers;

use App\Domain\TextBlock\Queries\GetAllTextBlocksQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Bus\DispatchesJobs;

class TextBlockComposer
{

    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        /** @var Collection $collection */
        $textBlocks = $this->dispatchNow(new GetAllTextBlocksQuery());

        $reindexed = $textBlocks->mapWithKeys(function ($item) {
            return [$item->sys_name => $item->text];
        });

        $view->with('textBlocks', $reindexed);
    }
}