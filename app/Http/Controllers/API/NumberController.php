<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Number;

class NumberController extends Controller
{

    public function showAllWhiteListed()
    {
        $number = Number::where('isWhitelisted', 1)->get();

        return response()->json(['number' => $number, 'message' => 'active', 'status_code' => 1], 200);
    }

    public function showAllBlackListed()
    {
        $number = Number::where('isWhitelisted', 0)->get();

        return response()->json(['number' => $number, 'message' => 'blocked', 'status_code' => 1], 200);
    }

    /**
     *
     * Display the specified resource.
     *
     * @param  Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show($number)
    {
        // dd($number);
        $number = Number::where('number', $number)->first();

        if($number){

            $message = $number->isWhitelisted ? 'active' : 'blocked';

            return response()->json(['number' => $number['number'], 'message' => $message, 'status_code' => 1], 200);
        }else{
            return response()->json(['message' => 'Number not found', 'status_code' => 0], 404);

        }

    }

}
