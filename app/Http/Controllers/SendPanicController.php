<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendPanicModel;
class SendPanicController extends Controller
{
    public function SendPanic(Request $req)
    {
        $this->validate([
             'Longitude' =>'required',
             'Latitude' =>'required'
            ]);

            $panic = SendPanicModelDB::insert([

                "longitude" => $req->longitude,
                "latitude"=> $req->latitude,
                "panic_type" => $req->panic_type,
                "details" => $req->details
                ]);

                return [
                    {
                        "status": "success",
                        "message": "Panic raised successfully",
                        "data": {
                        "panic_id": 5
                        }
                        }
                ]
    }

    public function CancelPanic(Request $req)
    {
        $cancel = SendPanicModelDB::all();

        return [
            {
                "status": "success",
                "message": "Panic cancelled successfully",
                "data": {
                }
                }

        ]

    }


}
