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
        
        return view('/');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'userInput' => 'required|max:100',
        ]);
        $taak = new Taken();
        $taak->taak = $request->input('userInput');
        $taak->save();

        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $request->validate([
            'userInputEdit' => 'required|max:100',
        ]);
    
        $taak = Taken::find($id);

        $taak->taak = $request->input('userInputEdit');
        $taak->save();
    
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
}
