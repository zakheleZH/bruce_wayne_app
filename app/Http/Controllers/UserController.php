<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{

    public $successStatus = 200;
    public function login()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;

        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }

        return [
            {
                "status": "success",
                "message": "Action completed successfully",
                "data": {
                "api_access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiN
                jRlZTIzN2Q0ZWIyZWYzY2NkYTQ1YTAzNDFkYTY2MGMzMjk2YWYxMjQ3MDNmMzY1ZmNjOWJkOGNiMDdlNTg5NDU0MDIx
                NmQwMTUyNjNjMmIiLCJpYXQiOjE2MTQ5MzI3MzYsIm5iZiI6MTYxNDkzMjczNiwiZXhwIjoxNjQ2NDY4NzM1LCJzdWI
                iOiI2NDgxIiwic2NvcGVzIjpbXX0 "
                }
                }
        ]
    }
}
