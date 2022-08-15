<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'device_name' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            $response = ["message" => "The provided credentials are incorrect."];
            return response($response, 422);
        } else {
            if($user->role_id != $request->role_id){
                $response = ["message" => "The provided credentials are incorrect."];
                return response($response, 422);
            }
            $token = $user->createToken($user->id . $request->device_name . date('Y-m-d H:i:s'))->plainTextToken;
            $result = new UserResource($user);
            $result->setToken($token);
            return $result;
        }
    }

    public function register (Request $request) {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required|numeric|max:8',
            'device_name' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response(['message'=>$validator->errors()->all()], 422);
        }

        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        $token = $user->createToken($user->id . $request->device_name . date('Y-m-d H:i:s'))->plainTextToken;
        return response($token, 200);
    }

    public function logout (Request $request) {
        $user = $request->user();
        $user->tokens()->delete();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    public function forgot() {
        $credentials = request()->validate(['email' => 'required|string|email|max:255']);
        Password::sendResetLink($credentials);
        return response()->json(["message" => 'Reset password link sent on your email id.']);
    }
}
