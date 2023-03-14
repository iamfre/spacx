<?php

namespace App\Http\Controllers;

use App\Models\Ship;

class CatalogController extends Controller
{
    public function index()
    {
        $ships = Ship::query()->orderBy('created_at', 'DESC')->paginate(3);

        return view('catalog.index', [
            'ships' => $ships,
        ]);
    }

    public function show()
    {
        //
    }
}
