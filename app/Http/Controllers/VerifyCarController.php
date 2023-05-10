<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyCarController extends Controller
{

    public function index(Request $request)
    {

        $name = $request->input('userName');

        return response()->json([
            'id' => 2,
            'info' => 'dummy info returned from the server',
            'name' => $name,
            'year' => 2023
        ]);

        //validate the inputs 
        //send the cURL request to the api
        //get a response
        //send it to view (add vehicle)
    }
}
