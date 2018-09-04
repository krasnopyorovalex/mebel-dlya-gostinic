<?php

namespace App\Http\Controllers\Admin;

use App\Domain\ReadySolution\Commands\CreateReadySolutionCommand;
use App\Domain\ReadySolution\Commands\DeleteReadySolutionCommand;
use App\Domain\ReadySolution\Commands\UpdateReadySolutionCommand;
use App\Domain\ReadySolution\Queries\GetAllReadySolutionsQuery;
use App\Domain\ReadySolution\Queries\GetReadySolutionByIdQuery;
use App\Http\Controllers\Controller;
use Domain\ReadySolution\Requests\CreateReadySolutionRequest;
use Domain\ReadySolution\Requests\UpdateReadySolutionRequest;

/**
 * Class ReadySolutionController
 * @package App\Http\Controllers\Admin
 */
class ReadySolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readySolutions = $this->dispatch(new GetAllReadySolutionsQuery());

        return view('admin.ready_solutions.index', [
            'readySolutions' => $readySolutions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ready_solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateReadySolutionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateReadySolutionRequest $request)
    {
        $this->dispatch(new CreateReadySolutionCommand($request));

        return redirect(route('admin.ready_solutions.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $readySolution = $this->dispatch(new GetReadySolutionByIdQuery($id));

        return view('admin.ready_solutions.edit', [
            'readySolution' => $readySolution
        ]);
    }

    /**
     * @param $id
     * @param UpdateReadySolutionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UpdateReadySolutionRequest $request)
    {
        $this->dispatch(new UpdateReadySolutionCommand($id, $request));

        return redirect(route('admin.ready_solutions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteReadySolutionCommand($id));

        return redirect(route('admin.ready_solutions.index'));
    }
}