<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class announceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces =Announce::all();
        return view('announce.index', compact('announces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Announce::create($request->all());
        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announce $announce)
    {
        return view('announce.show', compact($announce));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announce $announce)
    {
        return view('announce.edit', compact('announce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announce $announce)
    {
        $announce->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        $announce->delete();
        return redirect()->back();
    }
}
