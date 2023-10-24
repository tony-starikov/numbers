<?php

namespace App\Http\Controllers;

use App\Http\Resources\NumberResource;
use App\Models\Number;
use Illuminate\Http\Resources\Json\JsonResource;

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

    /**
     * Display the specified resource.
     */
    public function retrieve($id)
    {
        try {
            $resource = Number::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'status' => 'ERROR',
                'error' => '404 not found'
            ], 404);
        }

        return new NumberResource($resource);
    }
}
