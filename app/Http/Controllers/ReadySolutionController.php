<?php

namespace App\Http\Controllers;

/**
 * Class ReadySolutionController
 * @package App\Http\Controllers
 */
class ReadySolutionController extends Controller
{

    /**
     * @param string $alias
     */
    public function show(string $alias)
    {
        dd($alias);
    }
}
