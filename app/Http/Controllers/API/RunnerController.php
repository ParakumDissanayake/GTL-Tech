<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Runner;
use Illuminate\Http\Request;
use App\Interfaces\RunnerInterface;

class RunnerController extends Controller
{

    protected $runnerInterface;

    public function __construct(RunnerInterface $runnerInterface)
    {
        $this->runnerInterface = $runnerInterface;
    }

    /**
     * Get runners for data by id
     */
    public function get_runner_form_data(Request $request, $id) {
        return $this->runnerInterface->getRunnerById($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function show(Runner $runner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function edit(Runner $runner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Runner $runner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Runner $runner)
    {
        //
    }

}
