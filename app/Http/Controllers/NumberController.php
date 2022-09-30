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

    public function update(Number $number)
    {
        $attributes = request()->validate([
            'number' => ['required', 'min:10'],
        ]);
        $number->update($attributes);

        return redirect(route('dashboard'))->with([
            'message' => 'active',
            'status' => 1,
        ]);
    }

    public function destroy(Number $number)
    {
        $number->delete();

        return redirect(route('dashboard'))->with([
            'message' => 'number deleted successfully',
            'status' => 1,
        ]);

    }

    public function blacklist(Number $number)
    {

        $number->isWhitelisted ? $number->isWhitelisted = 0 : $number->isWhitelisted = 1;
        $number->save();
        return redirect(route('dashboard'))->with([
            'message' => 'blocked',
            'status' => 1,
        ]);
    }

}
