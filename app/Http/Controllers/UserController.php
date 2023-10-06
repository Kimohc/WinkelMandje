<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Taken;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taken = Taken::all();
        return view('index' , compact('taken'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'userInput' => 'required|max:100',
        ]);
        $selectedValue = $request->input('Winkel');
        Taken::create([
            'taak' => $request->input('userInput'),
            'winkel' => $selectedValue
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['taak' => Taken::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $taak = Taken::find($id);

        return view('update', compact('taak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $data = $request->validate([
            'taak' => 'required|max:100',
            'winkel' => 'required'
        ]);

         $taak = Taken::findOrFail($id);
        $taak->update($data);
        return redirect()->route('taken.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taken $taak)
    {
        $taak->delete();

        return redirect('/');
    }
    public function destroyAll(Taken $taak)
    {
        Taken::truncate();
        return redirect('/');
    }
}
