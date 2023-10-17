<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $activites = Activite::all();
       return view ('activites.index')->with('activites', $activites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Activite::create($input);
        return redirect('activite')->with('flash_message', 'Activite Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $activite = Activite::find($id);
    return view('activites.show')->with('activites', $activite);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $activite = Activite::find($id);
    return view('activites.edit')->with('activites', $activite);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activite = Activite::find($id);
        $input = $request->all();
        $activite->update($input);
        return redirect('activite')->with('flash_message', 'activite Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Activite::destroy($id);
        return redirect('activite')->with('flash_message', 'Activite deleted!');
    }
}

