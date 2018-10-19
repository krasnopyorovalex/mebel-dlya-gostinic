<?php

namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

/**
 * Class UploadImagesService
 * @package App\Services
 */
class UploadImagesService
{

    /**
     * @var int
     */
    private $widthThumb = 192;

    /**
     * @var \Illuminate\Http\UploadedFile
     */
    private $image;

    /**
     * @var int
     */
    private $entityId;

    /**
     * @var string
     */
    private $entity;

    /**
     * @param Request $request
     * @param string $entity
     * @param int $entityId
     * @return UploadImagesService
     */
    public function upload(Request $request, string $entity, int $entityId): self
    {
        $this->entityId = $entityId;
        $this->entity = $entity;
        $this->image = $request->file('upload');

        //$this->image->store($this->getSavePath());
        $this->insertWatermark();
        $this->createThumb();

        return $this;
    }


    /**
     * @param int $widthThumb
     * @return UploadImagesService
     */
    public function setWidthThumb(int $widthThumb): self
    {
        $this->widthThumb = $widthThumb;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageHashName():string
    {
        $chunks = explode('.', $this->image->hashName());

        return strval(array_shift($chunks));
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->image->extension();
    }

    /**
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }

    /**
     * @param $imgName
     * @return string
     */
    private function getSavePath($imgName): string
    {
        $directory = 'public/' . $this->entity . '/' . $this->entityId;
        if ( ! \File::exists($directory)) {
            \Storage::makeDirectory($directory);
        }

        return public_path('storage/' . $this->entity . '/' . $this->entityId .'/' . $imgName);
    }

    private function createThumb(): void
    {
        (new ImageManager())->make($this->image)
            ->insert(public_path('images/watermark.png'),'bottom-right')
            ->resize($this->widthThumb, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($this->getSavePath($this->getImageHashName() . '_thumb.' . $this->getExt()));
    }

    private function insertWatermark(): void
    {
        (new ImageManager())->make($this->image)
            ->insert(public_path('images/watermark.png'),'bottom-right')
            ->save($this->getSavePath($this->getImageHashName() . '.' . $this->getExt()));
    }
}