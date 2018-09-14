<?php

namespace App\Domain\ReadySolution\Commands;

use App\ReadySolution;
use App\Domain\ReadySolution\Queries\GetReadySolutionByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateReadySolutionCommand
 * @package App\Domain\ReadySolution\Commands
 */
class UpdateReadySolutionCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateReadySolutionCommand constructor.
     * @param int $id
     * @param Request $request
     */
    public function __construct(int $id, Request $request)
    {
        $this->id = $id;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $readySolution = $this->dispatch(new GetReadySolutionByIdQuery($this->id));

        if ($this->request->has('image')) {
            if ($readySolution->image) {
                $this->dispatch(new DeleteImageCommand($readySolution->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $readySolution->id, ReadySolution::class));
        }

        $readySolution->relativeProducts()->sync($this->request->post('products'));

        return $readySolution->update($this->request->all());
    }

}