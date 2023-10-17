<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $evenements = Evenement::all();
       return view ('admin.evenements.index')->with('evenements', $evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.evenements.create');
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
        Evenement::create($input);
        return redirect('admin/evenement')->with('flash_message', 'Evenement Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $evenement = Evenement::find($id);
    return view('admin.evenements.show')->with('evenements', $evenement);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $evenement = Evenement::find($id);
    return view('admin.evenements.edit')->with('evenements', $evenement);
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evenement = Evenement::find($id);
        $input = $request->all();
        $evenement->update($input);
        return redirect('admin/evenement')->with('flash_message', 'evenement Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Evenement::destroy($id);
        return redirect('admin/evenement')->with('flash_message', 'Evenement deleted!');
    }
}

