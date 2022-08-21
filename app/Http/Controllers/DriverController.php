<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        /*$drivers = Driver::paginate(10);
        return view('dashboard.drivers.index', compact('drivers'));*/
        return view('dashboard.drivers.index');
        return response()->json(Driver::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.drivers.create');
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
            'identification_number' => 'required|numeric|max:10',
            'birthdate' => 'required|string|max:10',
            'name' => 'required|string|max:10',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:18',
            'driving_percentage' => 'required|string|max:10',
        ]);

        if ($validator->fails())
        {
            return response(['message'=>$validator->errors()->all()], 422);
        }

        $driver = Driver::create($request->toArray());
        return response(['message'=>'Driver added successfully.'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return DriverResource
     */
    public function show(Driver $driver)
    {
        return new DriverResource(Driver::find($driver));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('dashboard.drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $validator = Validator::make($request->all(), [
            'identification_number' => 'required|numeric|max:10',
            'birthdate' => 'required|date|max:10',
            'name' => 'required|string|max:10',
            'email' => 'required|email|string|max:255',
            'phone' => 'required|string|max:18',
            'driving_percentage' => 'required|string|max:10',
        ]);

        if ($validator->fails())
        {
            return response(['message'=>$validator->errors()->all()], 422);
        }

        $driver = Driver::find($request->id);
        $driver->update($request->all());
        $driver->save();

        return response(['message'=>'Driver updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $driver = Driver::destroy($id);
        return response()->json($driver);
        /*$company = Company::find($id);
        $company->delete();
        return Redirect()->route('companies.index');*/
    }
}
