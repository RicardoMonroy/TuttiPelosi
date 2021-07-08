<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PicturesController extends Controller
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


        return view('pictures.create', compact('pets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hoy = date("Y-m-d H:i:s");
        $pet = Pet::find($request->pet);

        $file = $request->file('picture');
        $name = $hoy . '-' . $pet->name;
        $path = 'Images/' . $name;
        Storage::putFileAs('/public/' . 'Images/', $file, $name );

        Picture::create([
            'picture' => $path,
            'pet_id' => $request->pet
        ]);

        $user = auth()->user();
        $owner = $user->owner;
        $pets = $owner->pets;
        $success = 'Foto almacenada, recuerda tener fotos recientes de tus peludos!';

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
        //
    }
}
