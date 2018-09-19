<?php

namespace App\Domain\RSImage\Commands;

use App\Domain\RSImage\Queries\GetRSImageByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteRSImageCommand
 * @package App\Domain\RSImage\Commands
 */
class DeleteRSImageCommand
{

    use DispatchesJobs;

    private $id;

    /**
     * DeleteGalleryImageCommand constructor.
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
        $image = $this->dispatch(new GetRSImageByIdQuery($this->id));

        \Storage::delete([
            'public/rs/' . $image->rs_id . '/' . $image->basename . '.' . $image->ext,
            'public/rs/' . $image->rs_id . '/' . $image->basename . '_thumb.' . $image->ext
        ]);

        return $image->delete();
    }

}