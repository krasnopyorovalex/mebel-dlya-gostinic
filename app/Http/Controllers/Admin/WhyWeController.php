<?php

namespace App\Http\Controllers\Admin;

use App\Domain\WhyWe\Commands\CreateWhyWeCommand;
use App\Domain\WhyWe\Commands\DeleteWhyWeCommand;
use App\Domain\WhyWe\Commands\UpdateWhyWeCommand;
use App\Domain\WhyWe\Queries\GetAllWhyWesQuery;
use App\Domain\WhyWe\Queries\GetWhyWeByIdQuery;
use App\Http\Controllers\Controller;
use Domain\WhyWe\Requests\CreateWhyWeRequest;
use Domain\WhyWe\Requests\UpdateWhyWeRequest;

/**
 * Class WhyWeController
 * @package App\Http\Controllers\Admin
 */
class WhyWeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whyWes = $this->dispatch(new GetAllWhyWesQuery());

        return view('admin.why_wes.index', [
            'whyWes' => $whyWes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.why_wes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateWhyWeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateWhyWeRequest $request)
    {
        $this->dispatch(new CreateWhyWeCommand($request));

        return redirect(route('admin.why_wes.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whyWe = $this->dispatch(new GetWhyWeByIdQuery($id));

        return view('admin.why_wes.edit', [
            'whyWe' => $whyWe
        ]);
    }

    /**
     * @param $id
     * @param UpdateWhyWeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateWhyWeRequest $request)
    {
        $this->dispatch(new UpdateWhyWeCommand($id, $request));

        return redirect(route('admin.why_wes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteWhyWeCommand($id));

        return redirect(route('admin.why_wes.index'));
    }
}
