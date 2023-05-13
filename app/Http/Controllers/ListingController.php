<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Listing::class, 'listing');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->only(['priceFrom','priceTo', 'beds', 'baths', 'areaFrom', 'areaTo']);

        return inertia('Listing/Index', [
            'listings' => Listing::latest()
                            ->filter($filters)
                            ->paginate(9)
                            ->withQueryString(),
            'filters' => $filters]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show', ['listing' => $listing]);
    }
}
