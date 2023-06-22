<?php

namespace App\Http\Controllers;

use App\addAssessor;
use App\Repairer;
use App\Repo\AccidentService\AccidentServiceInterface;
use Illuminate\Http\Request;

class AccidentServiceReportController extends Controller
{
    protected $accident_assessing_report = '';

    public function __construct(AccidentServiceInterface $accidentServiceInterface)
    {
        $this->accident_assessing_report = $accidentServiceInterface;
    }

    public function create()
    {
        $data =
        [
            'repairers' => Repairer::all(['id', 'name']),
            'assessors' => addAssessor::all(['id', 'assessor'])
        ];
        return view('accident-service.create', compact('data'));
    }

    public function store (Request $request)
    {
        $response = $this->accident_assessing_report->store($request->all());
    }
}
