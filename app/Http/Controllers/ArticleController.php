<?php

namespace App\Http\Controllers;

use App\Domain\Article\Queries\GetArticleByAliasQuery;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $article = $this->dispatch(new GetArticleByAliasQuery($alias));

        return view('article.index', ['article' => $article]);
    }
}
