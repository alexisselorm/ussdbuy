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
            'number' => ['required', 'min:10', 'unique:numbers'],
        ]);
        Number::create($attributes);

        return redirect(route('dashboard'))->with([
            'message' => 'active',
            'status_code' => 1,
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
            'status_code' => 1,
        ]);
    }

    public function destroy(Number $number)
    {
        $number->delete();

        return redirect(route('dashboard'))->with([
            'message' => 'number deleted successfully',
            'status_code' => 1,
        ]);

    }

    public function blacklist(Number $number)
    {

        $number->isWhitelisted ? $number->isWhitelisted = 0 : $number->isWhitelisted = 1;
        $message = $number->isWhitelisted ? 'whitelisted' : 'blacklisted';
        $number->save();
        return redirect(route('dashboard'))->with([
            'message' => 'Number has been '.$message,
            'status_code' => 1,
        ]);
    }

}
