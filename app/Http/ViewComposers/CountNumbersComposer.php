<?php

namespace App\Http\ViewComposers;

use App\Domain\AboutCount\Queries\GetAllAboutCountsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CountNumbersComposer
 * @package App\Http\ViewComposers
 */
class CountNumbersComposer
{

    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $countAbout = $this->dispatch(new GetAllAboutCountsQuery());

        $view->with('countAbout', $countAbout);
    }
}