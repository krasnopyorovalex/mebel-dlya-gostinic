<?php

namespace App\Domain\Gallery\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Gallery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateGalleryCommand
 * @package App\Domain\Gallery\Commands
 */
class CreateGalleryCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateGalleryCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $gallery = new Gallery();
        $gallery->fill($this->request->all());
        $gallery->save();

        if ($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $gallery->id, Gallery::class));
        }

        return true;
    }

}