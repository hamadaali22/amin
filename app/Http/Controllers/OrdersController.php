<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard.orders.index');
        return response()->json(Orders::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.orders.create');
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
            'user_id' => 'required',
            'sub_insurance_id' => 'required',
            'car_id' => 'required',
            'driver_id' => 'required',
            'company_id' => 'required',
            'insurance_date_start' => 'required|data',
            'insurance_date_end' => 'required|data',
            'payment_id' => 'required',
            'coupon_id' => 'required',
            'status' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $Order = Orders::create($request->toArray());
        return response($Order, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return OrderResource
     */
    public function show( $id)
    {
        return new OrderResource(Orders::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $order = Orders::find($id);
        return view('dashboard.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'sub_insurance_id' => 'required',
            'car_id' => 'required',
            'driver_id' => 'required',
            'company_id' => 'required',
            'insurance_date_start' => 'required|data',
            'insurance_date_end' => 'required|data',
            'payment_id' => 'required',
            'coupon_id' => 'required',
            'status' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['message' => $validator->errors()->all()], 422);
        }
        $Order = Orders::find($id);
        $Order->update($request->all());
        $Order->save();
        return response($Order, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy( $id)
    {
        return response()->json(Orders::destroy($id));
    }
}
