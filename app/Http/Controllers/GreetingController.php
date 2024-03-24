<?php

namespace App\Http\Controllers;

use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet(Request $request)
    {
        return view('greeting-page', [
            'name' => $request->input('name'),
            'now' => CarbonImmutable::now()
        ]);
    }
}
