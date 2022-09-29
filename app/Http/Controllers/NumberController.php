<?php

namespace App\Http\Controllers;

use App\Models\Number;

class NumberController extends Controller
{
    //
    public function index()
    {
        $numbers = Number::all();

        return view('dashboard', [
            'numbers' => $numbers,
        ]);
    }
    public function create()
    {
        return view('number.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'number' => ['required'],
        ]);
        Number::create($attributes);

        return redirect(route('dashboard'))->with([
            'message' => 'active',
            'status' => 1,
        ]);
    }

    public function edit(Number $number)
    {
        // dd($player);
        return view('number.edit', [
            'number' => $number,
        ]);
    }

}
