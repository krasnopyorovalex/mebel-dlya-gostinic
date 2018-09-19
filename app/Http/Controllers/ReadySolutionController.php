<?php

namespace App\Http\Controllers;

use App\Domain\ReadySolution\Queries\GetReadySolutionByAliasQuery;

/**
 * Class ReadySolutionController
 * @package App\Http\Controllers
 */
class ReadySolutionController extends Controller
{

    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $readySolution = $this->dispatch(new GetReadySolutionByAliasQuery($alias));

        $readySolution->tabs = $readySolution->tabs->mapWithKeys(function ($item) {
            return [$item->tab_id => $item->value];
        });

        return view('ready_solution.index', ['readySolution' => $readySolution]);
    }
}
