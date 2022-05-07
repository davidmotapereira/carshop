<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Featured;

class FeaturedController extends Controller
{
    public function index()
    {
        $featureds = Featured::all();

        return view('carshop', ['featureds' => $featureds]);

        //return Featured::all();
    }
}
