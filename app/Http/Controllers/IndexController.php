<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // dd(Listing::all());
        // dd(Listing::where('beds', '>=', 4)->orderBy('price', 'asc')->first());
        // Make sure to copy the code below, but WITHOUT comments, so uncomment it
        // first (remove // from the beginning of 3 lines below, then copy)
        // Listing::create([
        //     'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
        // ])
        // return 'index';
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!',
            ]
        );
    }
    public function show()
    {
        // return 'show';
        return inertia('Index/Show');
    }
}
