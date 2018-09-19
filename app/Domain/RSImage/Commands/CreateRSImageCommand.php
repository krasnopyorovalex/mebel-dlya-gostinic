<?php

namespace App\Domain\RSImage\Commands;

use App\RSImage;
use App\Services\UploadImagesService;

/**
 * Class CreateRSImageCommand
 * @package App\Domain\RSImage\Commands
 */
class CreateRSImageCommand
{

    private $uploadImage;

    /**
     * CreateRSImageCommand constructor.
     * @param UploadImagesService $uploadImage
     */
    public function __construct(UploadImagesService $uploadImage)
    {
        $this->uploadImage = $uploadImage;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $rsImage = new RSImage();
        $rsImage->basename = $this->uploadImage->getImageHashName();
        $rsImage->ext = $this->uploadImage->getExt();
        $rsImage->rs_id = $this->uploadImage->getEntityId();

        return $rsImage->save();
    }

}