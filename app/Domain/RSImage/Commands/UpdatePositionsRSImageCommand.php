<?php

namespace App\Domain\RSImage\Commands;

use App\Domain\RSImage\Queries\GetRSImageByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

/**
 * Class UpdatePositionsRSImageCommand
 * @package App\Domain\RSImage\Commands
 */
class UpdatePositionsRSImageCommand
{

    use DispatchesJobs;

    private $request;

    /**
     * UpdatePositionsRSImageCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle(): void
    {
        $data = $this->request->post()['data'];

        if( is_array($data)) {
            foreach ($data as $position => $imageId) {
                $image = $this->dispatch(new GetRSImageByIdQuery($imageId));
                $image->pos = $position;
                $image->update();
            }
        }
    }
}