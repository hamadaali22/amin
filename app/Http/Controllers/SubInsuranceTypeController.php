<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubInsuranceTypeResource;
use App\Models\SubInsuranceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubInsuranceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard.sub_insurance_types.index');
        return response()->json(SubInsuranceType::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.sub_insurance_types.create');
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
            'sub_insurance_name' => 'required|string|max:255',
            'insurance_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $SubInsuranceType = SubInsuranceType::create($request->toArray());
        return response($SubInsuranceType, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubInsuranceType  $subInsuranceType
     * @return SubInsuranceTypeResource
     */
    public function show($id)
    {
        return new SubInsuranceTypeResource(SubInsuranceType::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubInsuranceType  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $subInsuranceType = SubInsuranceType::find($id);
        return view('dashboard.sub_insurance_types.edit', compact('subInsuranceType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubInsuranceType  $subInsuranceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator::make($request->all(), [
            'sub_insurance_name' => 'required|string|max:255',
            'insurance_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $SubInsuranceType = SubInsuranceType::find($id);
        $SubInsuranceType->update();
        $SubInsuranceType->save();
        return response($SubInsuranceType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubInsuranceType  $subInsuranceType
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy( $id)
    {
       return response()->json(SubInsuranceType::destroy($id));
    }
}
