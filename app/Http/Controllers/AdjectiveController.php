<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adjective;
use App\Http\Requests\AdjectiveRequest;
use App\Http\Requests\UpdateAdjectiveRequest;

class AdjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $word = request('word');
        $difficulty = request('difficulty');

        return view('adjectives.index', [
            'adjectives' => Adjective::word($word)
                ->difficulty($difficulty)
                ->orderBy('created_at', 'desc')
                ->paginate(),
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
    public function store(AdjectiveRequest $request)
    {
        Adjective::create($request->validated());

        return redirect()->route('adjectives.index');
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
    public function edit(Adjective $adjective)
    {
        return view('adjectives.edit', [
            'adjective' => $adjective,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdjectiveRequest $request, Adjective $adjective)
    {
        $adjective->update($request->validated());

        return redirect()->route('adjectives.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
