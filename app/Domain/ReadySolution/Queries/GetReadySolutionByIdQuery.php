<?php

namespace App\Domain\ReadySolution\Queries;

use App\ReadySolution;

/**
 * Class GetReadySolutionByIdQuery
 * @package App\Domain\ReadySolution\Queries
 */
class GetReadySolutionByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetReadySolutionByIdQuery constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return ReadySolution::findOrFail($this->id);
    }
}