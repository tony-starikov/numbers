<?php

namespace App\Http\Controllers;

use App\Http\Resources\NumberResource;
use App\Models\Number;

class NumberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function generate()
    {
        $random_number = random_int(1, 50000);
        $number = Number::create(['random_number' => $random_number]);

        return new NumberResource($number);
    }
}
