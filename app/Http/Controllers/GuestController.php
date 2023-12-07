<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
    public function store(Request $request)
    {
        $this->validate($request, [
            "first_name"=>"required",
            "last_name"=>"required",
            "nationality"=>"required",
            "id_code"=>"id_code",
            "mobile"=>"mobile",
            "room_number"=>"room_number",
            "room_type"=>"room_type"
        ]);

        /*$new_guest = new Guest();
        $new_guest->first_name  = $request->first_name;
        $new_guest->last_name   = $request->last_name;
        $new_guest->nationality = $request->nationality;
        $new_guest->id_code     = $request->id_code;
        $new_guest->mobile      = $request->mobile;
        $new_guest->room_number = $request->room_number;
        $new_guest->room_type   = $request->room_type;
        $new_guest->save();*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }

    public function reservation() {
        return view('reservation');
    }
}
