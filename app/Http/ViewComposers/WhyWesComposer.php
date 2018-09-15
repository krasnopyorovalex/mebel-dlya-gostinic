<?php

namespace App\Http\ViewComposers;

use App\Domain\WhyWe\Queries\GetAllWhyWesQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class WhyWesComposer
 * @package App\Http\ViewComposers
 */
class WhyWesComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $whyWes = $this->dispatch(new GetAllWhyWesQuery());

        $view->with('whyWes', $whyWes);
    }
}