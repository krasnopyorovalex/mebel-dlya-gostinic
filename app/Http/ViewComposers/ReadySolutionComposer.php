<?php

namespace App\Http\ViewComposers;

use App\Domain\ReadySolution\Queries\GetAllReadySolutionsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ReadySolutionComposer
{

    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $readySolutions = $this->dispatch(new GetAllReadySolutionsQuery(true));

        $view->with('readySolutions', $readySolutions);
    }
}