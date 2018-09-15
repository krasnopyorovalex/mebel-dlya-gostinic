<?php

namespace App\Domain\WhyWe\Commands;

use App\Http\Requests\Request;
use App\WhyWe;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateWhyWeCommand
 * @package App\Domain\WhyWe\Commands
 */
class CreateWhyWeCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateWhyWeCommand constructor.
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
        $whyWe = new WhyWe();
        $whyWe->fill($this->request->all());

        return $whyWe->save();
    }

}