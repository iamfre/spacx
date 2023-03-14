<?php

namespace App\Http\Controllers;

use App\Models\Ship;

class IndexController extends Controller
{
    public function index()
    {
        $ships = Ship::query()->inRandomOrder()->limit(8)->get();

        return view('home', [
            'ships' => $ships,
        ]);
    }

    public function contacts()
    {
        return view('contacts');
    }
}
