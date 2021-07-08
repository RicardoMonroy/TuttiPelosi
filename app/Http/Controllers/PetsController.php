<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Pet;
use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pets = Pet::all();
        $user = auth()->user();
        $owner = $user->owner;

        if( isset($owner->pets) ){
            $pets = $owner->pets;
        }else{
            $pets = NULL;
        }



        // dd($pets);

        // return response()->json(['data' => $pets]);
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'tag'    => 'required|min:7|max:7|unique:pets',
            'pin'    => 'required',
            'name' => 'required',
            'description' => 'required',
            'dog_breed' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'color' => 'required',
            'special_cares' => 'required',
            'personality' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $terciaAlta = substr($request->tag, 1, 3);
        $terciaBaja = substr($request->tag, 4, 3);

        // str_pad — Rellena un string hasta una longitud determinada con otro string
        $alta = str_pad($terciaAlta, 3, '0', STR_PAD_LEFT);
        $baja = str_pad($terciaBaja, 3, '0', STR_PAD_LEFT);

        $pin = (($terciaAlta + 1) * 111) * ($terciaBaja * 111) ;
        // strlen — Obtiene la longitud de un string
        $inicio = strlen($pin) - 4;

        // substr — Devuelve parte de una cadena
        $tag = $alta . $baja;
        $pin = substr($pin, $inicio, 4);

        if ($request->pin != $pin)
        {
            // dd('pin incorrecto, digitaste: ', $request->pin, ' y el chido es: ', $pin);
            return redirect()->back()->with('status', 'PIN invalido');
        }
        // dd($request->tag, $terciaAlta, $terciaBaja, $tag, $pin);

        $user = auth()->user();

        if ( !isset($user->owner) ){
            $owner = Owner::create([
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'user_id' => $user->id
            ]);
            Phone::create([
                'number' => NULL,
                'name' => 'Número principal',
                'owner_id' => $owner->id
            ]);
            Pet::create([
                'tag' => $tag,
                'pin' => $pin,
                'name' => $request->name,
                'description' => $request->description,
                'dog_breed' => $request->dog_breed,
                'age' => $request->age,
                'sex' => $request->sex,
                'color' => $request->color,
                'special_cares' => $request->special_cares,
                'personality' => $request->personality,
                'owner_id' => $owner->id
            ]);
            $success = 'Mascota creada con éxito, recuerda añadir fotos y vacunas a tu mascota. También recuerda llenar tus datos de contacto, en éste momento están vacíos.';

            $pets = Pet::where('owner_id', $owner->id)->get();

            return view('pets.index', compact('pets', 'success'));
        }else{
            $user = auth()->user();
            $owner = $user->owner;
            Pet::create([
                'tag' => $tag,
                'pin' => $pin,
                'name' => $request->name,
                'description' => $request->description,
                'dog_breed' => $request->dog_breed,
                'age' => $request->age,
                'sex' => $request->sex,
                'color' => $request->color,
                'special_cares' => $request->special_cares,
                'personality' => $request->personality,
                'owner_id' => $owner->id
            ]);
            $user = auth()->user();
            $owner = $user->owner;
            $pets = $owner->pets;
            $success = 'Mascota creada con éxito, recuerda añadir fotos y vacunas a tu mascota!';

            return view('pets.index', compact('pets', 'success'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
        // dd($tag);
        $pet = Pet::where('tag', $tag)->first();
        if( !$pet ){
            return response()->json([
                'message' => 'Not found Pet! Create One'
            ]);
        }
        $cover = $pet->pictures->first();
        // $cover = asset('storage').'/'.$cover->picture;
        // dd($cover);
        if (isset($cover)){
            $cover = $cover;
        }else{
            $cover = NULL;
        }
        if ($pet->pictures){
            $pictures = $pet->pictures;
        }else{
            $pictures = NULL;
        }
        if ($pet->vaccines){
            $vaccines = $pet->vaccines;
        }

        $owner = $pet->owner;
        $phones = $pet->owner->phones;



        // dd($pictures);

        // return response()->json(['pet' => $pet, 'owner' => $owner, 'phones' => $phones, 'pictures' => $pictures, 'vaccines' => $vaccines]);
        return view('pets.show', compact('pet', 'cover', 'vaccines', 'pictures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tag)
    {
        $pet = Pet::find($tag);
        $pet = Pet::where('tag', $tag)->first();
        $vaccines = $pet->vaccines;
        $pictures = $pet->pictures;

        return view('pets.edit', compact('pet', 'vaccines', 'pictures'));
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
