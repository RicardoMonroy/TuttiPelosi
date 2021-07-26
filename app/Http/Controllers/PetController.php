<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    public function index()
    {
        return view('P.index');
    }

    public function show($tag)
    {
        $pet = Pet::where('tag', $tag)->first();
        if( !$pet ){
            return redirect('pets/create');
        }

        $cover = $pet->pictures->first();
        $pictures = $pet->pictures;
        $phone = $pet->owner->phones->first();

        return view('P.show', compact('pet', 'cover', 'pictures', 'phone'));
    }

    public function edit($tag)
    {
        $pet = Pet::where('tag', $tag)->first();
        if( !$pet ){
            return view('pets.create');
        }

        return view('P.show', compact('pet'));
    }

    public function store(Request $request)
    {
        // dd($request->tag);
        $validator = Validator::make($request->all(), [
            'tag'    => 'required|min:7|max:7'
        ]);

        if ($validator->fails())
        {
            $success = 'No encontramos a esa mascota! Ingresa un TAG existente';
            return view('P.index', compact('success'));
        }

        $terciaAlta = substr($request->tag, 1, 3);
        $terciaBaja = substr($request->tag, 4, 3);
        $tag = $terciaAlta . $terciaBaja;
        // dd($tag);

        $pet = Pet::where('tag', $tag)->first();
        if( !$pet ){
            // dd('no encontrada');
            return redirect('pets/create');
        }
        // dd($pet->pictures);
        $cover = $pet->pictures->first();
        $pictures = $pet->pictures;
        $phone = $pet->owner->phones->first();

        return view('P.show', compact('pet', 'cover', 'pictures', 'phone'));
    }

}
