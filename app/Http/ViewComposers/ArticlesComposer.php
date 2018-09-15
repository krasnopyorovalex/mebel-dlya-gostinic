<?php

namespace App\Http\ViewComposers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ArticlesComposer
 * @package App\Http\ViewComposers
 */
class ArticlesComposer
{
    use DispatchesJobs;

    private const LIMIT = 3;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $articles = $this->dispatch(new GetAllArticlesQuery(self::LIMIT));

        $view->with('articles', $articles);
    }
}