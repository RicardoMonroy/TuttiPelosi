<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Vaccine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VaccinesController extends Controller
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
        $user = auth()->user();
        $owner = $user->owner;
        $pets = $owner->pets;


        return view('vaccines.create', compact('pets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->date);
        Vaccine::create([
            'vaccine' => $request->vaccine,
            'date' => $request->date,
            'pet_id' => $request->pet
        ]);

        $user = auth()->user();
        $owner = $user->owner;
        $pets = $owner->pets;
        $success = 'Vacuna registrada con éxito, recuerda mantener esa informaión actualizada!';

        return view('pets.index', compact('pets', 'success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = Vaccine::find($id);
        $vaccine->delete();

        return redirect()->back();
    }
}
