<?php

namespace App\Domain\Gallery\Queries;

use App\Gallery;

/**
 * Class GetAllGalleriesQuery
 * @package App\Domain\Gallery\Queries
 */
class GetAllGalleriesQuery
{
    private $isPublished;

    public function __construct($isPublished = false)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = Gallery::with(['image']);

        if ($this->isPublished) {
            $query->where('is_published', '1');
        }

        return $query->get();
    }
}