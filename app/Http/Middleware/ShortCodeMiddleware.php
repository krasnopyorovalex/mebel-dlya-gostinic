<?php

namespace App\Http\Middleware;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Gallery\Queries\GetAllGalleriesQuery;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ShortCodeMiddleware
{
    use DispatchesJobs;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var $response Response */
        $response = $next($request);

        if ( ! method_exists($response, 'content')) {
            return $response;
        }

        $content = preg_replace_callback_array(
            [
                '#(<p(.*)>)?{articles}(<\/p>)?#' => function () {
                    $articles = $this->dispatch(new GetAllArticlesQuery(false, true));

                    return view('layouts.partials.for_shortcodes.articles_list', ['articles' => $articles]);
                },
                '#(<p(.*)>)?{portfolio}(<\/p>)?#' => function () {
                    $portfolios = $this->dispatch(new GetAllGalleriesQuery(true));

                    return view('layouts.partials.for_shortcodes.portfolio_list', ['portfolios' => $portfolios]);
                }
            ],
            $response->content()
        );

        $response->setContent($content);

        return $response;
    }
}
