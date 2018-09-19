<?php

namespace App\Domain\Page\Queries;

use App\Page;

/**
 * Class GetAllPagesQuery
 * @package App\Domain\Page\Queries
 */
class GetAllPagesQuery
{
    private $isPublished;

    /**
     * GetAllPagesQuery constructor.
     * @param bool $isPublished
     */
    public function __construct(bool $isPublished = false)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = new Page();

        if ($this->isPublished) {
            $query->where('is_published', '1');
        }

        return $query->get();
    }
}