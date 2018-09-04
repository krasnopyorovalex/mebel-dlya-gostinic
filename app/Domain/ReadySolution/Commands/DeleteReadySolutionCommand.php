<?php

namespace App\Domain\ReadySolution\Commands;

use App\Domain\ReadySolution\Queries\GetReadySolutionByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteReadySolutionCommand
 * @package App\Domain\ReadySolution\Commands
 */
class DeleteReadySolutionCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteReadySolutionCommand constructor.
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
        $ReadySolution = $this->dispatch(new GetReadySolutionByIdQuery($this->id));

        if($ReadySolution->image) {
            $this->dispatch(new DeleteImageCommand($ReadySolution->image));
        }

        return $ReadySolution->delete();
    }

}