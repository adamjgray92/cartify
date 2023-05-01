<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    // $listing = Listing::make(['beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker St', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000])
    public function index()
    {
        return inertia('Index/Index', [ 'message' => 'Hello from Controller']);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
