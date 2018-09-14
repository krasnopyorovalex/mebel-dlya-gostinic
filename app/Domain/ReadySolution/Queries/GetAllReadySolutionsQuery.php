<?php

namespace App\Domain\ReadySolution\Queries;

use App\ReadySolution;

/**
 * Class GetAllReadySolutionsQuery
 * @package App\Domain\ReadySolution\Queries
 */
class GetAllReadySolutionsQuery
{
    /**
     * @var bool
     */
    private $forMain;

    /**
     * GetAllReadySolutionsQuery constructor.
     * @param bool $forMain
     */
    public function __construct(bool $forMain = false)
    {
        $this->forMain = $forMain;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = ReadySolution::with(['image']);

        if ($this->forMain) {
            $query->forMain();
        }

        return $query->get();
    }
}