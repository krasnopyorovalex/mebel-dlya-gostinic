<?php

namespace App\Domain\ReadySolution\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use App\ReadySolution;
use App\ReadySolutionTab;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateReadySolutionCommand
 * @package App\Domain\ReadySolution\Commands
 */
class CreateReadySolutionCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateReadySolutionCommand constructor.
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
        $readySolution = new ReadySolution();
        $readySolution->fill($this->request->all());
        $readySolution->save();

        $readySolution->relativeProducts()->attach($this->request->post('products'));

        if($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $readySolution->id, ReadySolution::class));
        }

        $this->attachTabs($readySolution);

        return true;
    }

    /**
     * @param $readySolution
     */
    private function attachTabs($readySolution): void
    {
        if ($this->request->post('tabs')) {
            foreach ($this->request->post('tabs') as $key => $value) {
                if ($value) {
                    ReadySolutionTab::create([
                        'rs_id' => $readySolution->id,
                        'tab_id' => intval($key),
                        'value' => (string)$value
                    ]);
                }
            }
        }
    }

}