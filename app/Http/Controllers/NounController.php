<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noun;
use App\Http\Requests\NounRequest;
use App\Http\Requests\UpdateNounRequest;

class NounController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $word = request('word');
        $difficulty = request('difficulty');

        return view('nouns.index', [
            'nouns' => Noun::word($word)
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
    public function edit(Noun $noun)
    {
        return view('nouns.edit', [
            'noun' => $noun,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNounRequest $request, Noun $noun)
    {
        $noun->update($request->validated());

        return redirect()->route('nouns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noun $noun)
    {
        $noun->delete();

        return redirect()->route('nouns.index');
    }
}
