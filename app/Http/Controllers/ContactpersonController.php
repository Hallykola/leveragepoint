<?php

namespace App\Http\Controllers;

use App\Models\Contactperson;
use App\Http\Requests\StoreContactpersonRequest;
use App\Http\Requests\UpdateContactpersonRequest;

class ContactpersonController extends Controller
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
     * @param  \App\Http\Requests\StoreContactpersonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactpersonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactperson  $contactperson
     * @return \Illuminate\Http\Response
     */
    public function show(Contactperson $contactperson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactperson  $contactperson
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactperson $contactperson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactpersonRequest  $request
     * @param  \App\Models\Contactperson  $contactperson
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactpersonRequest $request, Contactperson $contactperson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactperson  $contactperson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactperson $contactperson)
    {
        //
    }
}
