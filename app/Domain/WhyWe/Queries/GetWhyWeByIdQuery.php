<?php

namespace App\Domain\WhyWe\Queries;

use App\WhyWe;

/**
 * Class GetWhyWeByIdQuery
 * @package App\Domain\WhyWe\Queries
 */
class GetWhyWeByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetWhyWeByIdQuery constructor.
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
        return WhyWe::findOrFail($this->id);
    }
}