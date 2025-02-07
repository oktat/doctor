<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        try {            
            return $this->tryIndex();
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th
            ])->setStatusCode(500);
        }
    }
    private function tryIndex()
    {
        $patients = Patient::all();
        $data = PatientResource::collection($patients);
        return response()->json([
            'success' => true,
            'data' => $data
        ])->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        try {
            return $this->tryStore($request);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th
            ])->setStatusCode(500);
        }
    }
    public function tryStore(Request $request)
    {
        // throw new Exception("Ez egy szándékosan dobott hiba!");
        $res = Patient::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $res
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return Patient::find($request->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $patient = Patient::find($request['id']);

        $patient->update($request->all());

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return Patient::destroy($request['id']);
    }
}
