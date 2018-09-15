<?php

namespace App\Domain\WhyWe\Commands;

use App\Domain\WhyWe\Queries\GetWhyWeByIdQuery;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateWhyWeCommand
 * @package App\Domain\WhyWe\Commands
 */
class UpdateWhyWeCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateWhyWeCommand constructor.
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
        $whyWe = $this->dispatch(new GetWhyWeByIdQuery($this->id));

        return $whyWe->update($this->request->all());
    }

}