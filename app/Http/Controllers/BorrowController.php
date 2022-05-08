<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use App\Models\Borrow;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreborrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreborrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateborrowRequest  $request
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateborrowRequest $request, borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(borrow $borrow)
    {
        //
    }
}
