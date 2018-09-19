<?php

namespace App\Domain\RSImage\Commands;

use App\Domain\RSImage\Queries\GetRSImageByIdQuery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateRSImageCommand
 * @package App\Domain\RSImage\Commands
 */
class UpdateRSImageCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateGalleryImageCommand constructor.
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
        $image = $this->dispatch(new GetRSImageByIdQuery($this->id));

        return $image->update($this->request->all());
    }

}