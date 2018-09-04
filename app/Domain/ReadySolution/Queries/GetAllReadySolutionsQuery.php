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
     * Execute the job.
     */
    public function handle()
    {
        return ReadySolution::all();
    }
}