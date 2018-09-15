<?php

namespace App\Domain\WhyWe\Queries;

use App\WhyWe;

/**
 * Class GetAllWhyWesQuery
 * @package App\Domain\WhyWe\Queries
 */
class GetAllWhyWesQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return WhyWe::all();
    }
}