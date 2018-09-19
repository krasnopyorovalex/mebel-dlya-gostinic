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
    private $isPublished;

    /**
     * GetAllArticlesQuery constructor.
     * @param bool $limit
     * @param bool $paginate
     * @param bool $isPublished
     */
    public function __construct(bool $limit = false, bool $paginate = false, bool $isPublished = false)
    {
        $this->limit = $limit;
        $this->paginate = $paginate;
        $this->isPublished = $isPublished;
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

        if ($this->isPublished) {
            $articles->where('is_published', '1');
        }

        return $articles->get();
    }
}