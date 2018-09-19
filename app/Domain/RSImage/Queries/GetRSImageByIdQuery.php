<?php

namespace App\Domain\RSImage\Queries;

use App\RSImage;

/**
 * Class GetRSImageByIdQuery
 * @package App\Domain\RSImage\Queries
 */
class GetRSImageByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetRSImageByIdQuery constructor.
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
        return RSImage::findOrFail($this->id);
    }
}