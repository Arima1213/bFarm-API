<?php

namespace App\Http\Controllers\backend;

use App\Models\mapped_land;
use App\Http\Requests\MappedLandRequest;
use App\Http\Controllers\Controller;


class MappedLandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $mappedLands = mapped_land::all();
        // Cek jika koleksi kosong
        if ($mappedLands->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'No mapped lands found.',
                'data' => [],
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $mappedLands,
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MappedLandRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MappedLandRequest $request)
    {
        $validated = $request->validated();

        $mappedLand = mapped_land::create($validated);

        // Update the land_status on the corresponding land record
        $land = $mappedLand->land;
        $land->land_status = 'mapped';
        $land->save();

        return response()->json([
            'success' => true,
            'message' => 'Mapped land successfully created.',
            'data' => $mappedLand,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MappedLand  $mappedLand
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(mapped_land $mappedLand)
    {
        $mappedLand->load('mappingType.productUses.product', 'landContent');

        return response()->json([
            'success' => true,
            'data' => $mappedLand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MappedLandRequest  $request
     * @param  \App\Models\MappedLand  $mappedLand
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MappedLandRequest $request, mapped_land $mappedLand)
    {
        $validated = $request->validated();

        $mappedLand = mapped_land::create($validated);

        // Update the land_status on the corresponding land record
        $land = $mappedLand->land;
        $land->land_status = 'mapped';
        $land->save();

        return response()->json([
            'success' => true,
            'message' => 'Mapped land successfully created.',
            'data' => $mappedLand,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MappedLand  $mappedLand
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(mapped_land $mappedLand)
    {
        $mappedLand->delete();

        return response()->json([
            'success' => true,
            'message' => 'Mapped land successfully deleted.',
        ]);
    }
}
