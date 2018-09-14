<?php

namespace App\Domain\Page\Queries;

use App\Page;

/**
 * Class GetPageByAliasQuery
 * @package App\Domain\Page\Queries
 */
class GetPageByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetPageByAliasQuery constructor.
     * @param string $alias
     */
    public function __construct(string $alias)
    {
        $this->alias = $alias;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Page::with(['slider' => function ($query) {
            return $query->with(['images']);
        }])->where('alias', $this->alias)->firstOrFail();
    }
}