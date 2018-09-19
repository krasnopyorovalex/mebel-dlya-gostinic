<?php

namespace App\Domain\ReadySolution\Queries;

use App\ReadySolution;

/**
 * Class GetReadySolutionByAliasQuery
 * @package App\Domain\ReadySolution\Queries
 */
class GetReadySolutionByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetReadySolutionByAliasQuery constructor.
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
        return ReadySolution::where('alias', $this->alias)
            ->where('is_published', '1')
            ->with(['image', 'relativeProducts' => function ($query) {
                return $query->with(['images']);
            }])
            ->firstOrFail();
    }
}