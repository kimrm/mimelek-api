<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noun;
use App\Http\Requests\NounRequest;

class NounController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nouns.index', [
            'nouns' => Noun::paginate(),
        ]);
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
    public function store(NounRequest $request)
    {
        Noun::create($request->validated());

        return redirect()->route('nouns.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
