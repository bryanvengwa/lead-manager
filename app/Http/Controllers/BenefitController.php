<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebenefitRequest;
use App\Http\Requests\UpdatebenefitRequest;
use App\Models\benefit;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebenefitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(benefit $benefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebenefitRequest $request, benefit $benefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(benefit $benefit)
    {
        //
    }
}
