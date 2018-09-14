<?php

namespace App\Domain\Gallery\Commands;

use App\Domain\Gallery\Queries\GetGalleryByIdQuery;
use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Gallery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateGalleryCommand
 * @package App\Domain\Gallery\Commands
 */
class UpdateGalleryCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateGalleryCommand constructor.
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
        $gallery = $this->dispatch(new GetGalleryByIdQuery($this->id));

        if ($this->request->has('image')) {
            if ($gallery->image) {
                $this->dispatch(new DeleteImageCommand($gallery->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $gallery->id, Gallery::class));
        }

        return $gallery->update($this->request->all());
    }

}