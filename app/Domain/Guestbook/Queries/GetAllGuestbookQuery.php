<?php

namespace App\Domain\Guestbook\Queries;

use App\Guestbook;

/**
 * Class GetAllGuestbookQuery
 * @package App\Domain\Guestbook\Queries
 */
class GetAllGuestbookQuery
{
    private $limit;

    /**
     * GetAllGuestbookQuery constructor.
     * @param bool $limit
     */
    public function __construct($limit = false)
    {
        $this->limit = $limit;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = Guestbook::with(['image'])->orderByDesc('published_at');

        if ($this->limit) {
            $query->limit($this->limit);
        }

        return $query->get();
    }
}