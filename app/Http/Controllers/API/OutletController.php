<?php

namespace App\Http\Controllers\API;

use App\Outlet;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Resources\Outlet as OutletResource;

class OutletController extends Controller
{
    /**
     * Get outlet listing on Leaflet JS geoJSN data structure.
     *
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\JsonResponse
     */

     public function index(Request $request)
     {
        $outlets = Outlet::all();

        $geoJSONdata = $outlets->map(function ($outlet) {
            return[
                'type' => 'feature',
                'properties' => new OutletResource($outlet),
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [
                        $outlet->longitude,
                        $outlet->latitude
                    ],
                ],
            ];
        });

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
     }
}
