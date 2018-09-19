<?php

namespace App\Http\Controllers\Admin;

use App\Domain\ReadySolution\Queries\GetReadySolutionByIdQuery;
use App\Domain\RSImage\Commands\CreateRSImageCommand;
use App\Domain\RSImage\Commands\DeleteRSImageCommand;
use App\Domain\RSImage\Commands\UpdatePositionsRSImageCommand;
use App\Domain\RSImage\Commands\UpdateRSImageCommand;
use App\Domain\RSImage\Queries\GetRSImageByIdQuery;
use Domain\RSImage\Requests\CreateRSImageRequest;
use Domain\RSImage\Requests\UpdateRSImageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UploadImagesService;

/**
 * Class RSImageController
 * @package App\Http\Controllers\Admin
 */
class RSImageController extends Controller
{
    /**
     * @var UploadImagesService
     */
    private $uploadImagesService;

    /**
     * RSImageController constructor.
     * @param UploadImagesService $uploadImagesService
     */
    public function __construct(UploadImagesService $uploadImagesService)
    {
        $this->uploadImagesService = $uploadImagesService;
    }

    /**
     * @param int $rs
     * @return array
     * @throws \Throwable
     */
    public function index(int $rs)
    {
        $rs = $this->dispatch(new GetReadySolutionByIdQuery($rs));

        return [
            'images' => view('admin.ready_solutions._images_box', [
                'readySolution' => $rs
            ])->render()
        ];
    }

    /**
     * @param CreateRSImageRequest $request
     * @param $product
     * @return array
     */
    public function store(CreateRSImageRequest $request, $product)
    {
        $image = $this->uploadImagesService->setWidthThumb(89)->upload($request, 'rs', $product);
        $this->dispatch(new CreateRSImageCommand($image));

        return [
            'message' => 'Данные сохранены успешно'
        ];
    }

    /**
     * @param $id
     * @return string
     * @throws \Throwable
     */
    public function edit($id)
    {
        $image = $this->dispatch(new GetRSImageByIdQuery($id));

        return view('admin.ready_solutions._image_popup', [
            'image' => $image
        ])->render();
    }

    /**
     * @param $id
     * @param UpdateRSImageRequest $request
     * @return array
     * @throws \Throwable
     */
    public function update($id, UpdateRSImageRequest $request)
    {
        $this->dispatch(new UpdateRSImageCommand($id, $request));
        $image = $this->dispatch(new GetRSImageByIdQuery($id));

        return [
            'images' => view('admin.ready_solutions._images_box', [
                'readySolution' => $image->rs
            ])->render(),
            'message' => 'Данные сохранены успешно'
        ];
    }

    /**
     * @param $id
     * @return array
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteRSImageCommand($id));

        return [
            'message' => 'Изображение удалено успешно'
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function updatePositions(Request $request)
    {
        $this->dispatch(new UpdatePositionsRSImageCommand($request));

        return [
            'message' => 'Порядок изображений сохранён успешно'
        ];
    }
}
