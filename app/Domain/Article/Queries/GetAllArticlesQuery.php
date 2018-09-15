<?php

namespace App\Domain\Article\Queries;

use App\Article;

/**
 * Class GetAllArticlesQuery
 * @package App\Domain\Article\Queries
 */
class GetAllArticlesQuery
{
    private $limit;
    private $paginate;

    /**
     * GetAllArticlesQuery constructor.
     * @param bool $limit
     * @param bool $paginate
     */
    public function __construct($limit = false, $paginate = false)
    {
        $this->limit = $limit;
        $this->paginate = $paginate;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $articles = Article::with(['image'])->orderByDesc('published_at');

        if ($this->limit) {
            $articles->limit($this->limit);
        }

        if ($this->paginate) {
            return $articles->paginate(5);
        }

        return $articles->get();
    }
}