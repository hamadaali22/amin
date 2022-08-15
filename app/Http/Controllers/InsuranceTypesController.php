<?php

namespace App\Http\Controllers;

use App\Http\Resources\InsuranceTypeResource;
use App\Models\InsuranceTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InsuranceTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(InsuranceTypes::all());
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

        $validator = Validator::make($request->all(), [
            'insurance_type' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $InsuranceTypes = InsuranceTypes::create($request->toArray());
        return response($InsuranceTypes, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsuranceTypes  $insuranceTypes
     * @return InsuranceTypeResource
     */
    public function show($id)
    {
        return new InsuranceTypeResource(InsuranceTypes::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceTypes  $insuranceTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceTypes $insuranceTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsuranceTypes  $insuranceTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator::make($request->all(), [
            'insurance_type' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $InsuranceType = InsuranceTypes::find($id);
        $InsuranceType->update($request->all());
        $InsuranceType->save();
        return response($InsuranceType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceTypes  $insuranceTypes
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return response()->json(InsuranceTypes::destroy($id));
    }
}
