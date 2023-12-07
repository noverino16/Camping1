<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('frontend.rental');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Product::where('name', 'like', '%' . $query . '%')->get();

        return view('frontend.result', ['results' => $results, 'query' => $query]);
    }
}
