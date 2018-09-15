<?php

namespace App\Domain\WhyWe\Commands;

use App\Domain\WhyWe\Queries\GetWhyWeByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteWhyWeCommand
 * @package App\Domain\WhyWe\Commands
 */
class DeleteWhyWeCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteWhyWeCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle(): bool
    {
        $whyWe = $this->dispatch(new GetWhyWeByIdQuery($this->id));

        return $whyWe->delete();
    }

}