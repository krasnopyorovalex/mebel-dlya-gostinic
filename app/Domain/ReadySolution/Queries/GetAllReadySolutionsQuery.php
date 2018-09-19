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
    private $isPublished;

    /**
     * GetAllReadySolutionsQuery constructor.
     * @param bool $forMain
     * @param bool $isPublished
     */
    public function __construct(bool $forMain = false, bool $isPublished = false)
    {
        $this->forMain = $forMain;
        $this->isPublished = $isPublished;
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

        if ($this->isPublished) {
            $query->where('is_published', '1');
        }

        return $query->get();
    }
}