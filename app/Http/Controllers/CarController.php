<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard.cars.index');
        return response()->json(Car::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.cars.create');
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
            'car_brand' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'car_id' => 'required|max:20',
            'car_plate' => 'required|max:20',
            'production_year' => 'required|string',
            'use_purpose' => 'required',
            'car_owner' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $car = Car::create($request->toArray());
        return response($car, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return CarResource
     */
    public function show($id)
    {
        return new CarResource(Car::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('dashboard.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'car_brand' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'car_id' => 'required|max:20',
            'car_plate' => 'required|max:20',
            'production_year' => 'required|string',
            'use_purpose' => 'required',
            'car_owner' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $car = Car::find($id);
        $car->update($request->all());
        $car->save();
        return response($car, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return response()->json(Car::destroy($id));
    }
}
