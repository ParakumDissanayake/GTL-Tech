<?php

namespace App\Repositories;

use App\Interfaces\RunnerInterface;
use App\Traits\ResponseAPI;
use App\Models\Runner;
use DB;

class RunnerRepository implements RunnerInterface
{
    use ResponseAPI;

    public function getRunnerById($id)
    {
        try {
            $Runner = Runner::with('race', 'last_runrs', 'form_data')->find($id);
            
            // Check the Runner
            if(!$Runner) return $this->errorResponse(404);

            return $this->successResponse($Runner->serialize());
        } catch(\Exception $e) {
            return $this->errorResponse($e->getCode());
        }
    }

}