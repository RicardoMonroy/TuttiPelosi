<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Phone;
use Illuminate\Http\Request;

class OwnerController extends Controller
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
        return view('owner.create');
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
        $user = auth()->user();
        $owner = Owner::create([
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'user_id' => $user->id
        ]);
        Phone::create([
            'number' => $request->phone,
            'name' => 'Número principal',
            'owner_id' => $owner->id
        ]);

        return view('profile.edit');
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
        $owner = Owner::find($id);

        return view('owner.edit', compact('owner'));
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
        // dd($request->all());
        $owner = Owner::find($id);
        $phone = $owner->phones->first();
        $owner->update($request->all());
        $phone->update([
            'number' => $request->phone,
            'name' => 'Número principal',
            'owner_id' => $owner->id
        ]);

        return view('profile.edit');
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
