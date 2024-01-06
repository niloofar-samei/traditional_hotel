<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\reservationRequest;
use App\Http\Requests\updateReservationRequest;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(reservationRequest $request)
    {
        $new_guest = new Guest();
        $new_guest->first_name  = $request->first_name;
        $new_guest->last_name   = $request->last_name;
        $new_guest->nationality = $request->nationality;
        $new_guest->id_code     = $request->id_code;
        $new_guest->mobile      = $request->mobile;
        $new_guest->room_number = $request->room_number;
        $new_guest->room_type   = $request->room_type;
        $new_guest->save();
        Session::flash('status', 'Your room is reserved!');
        return redirect('/reservation');
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
        return view('edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateReservationRequest $request, Guest $guest)
    {
        $guest->first_name  = $request->first_name;
        $guest->last_name   = $request->last_name;
        $guest->nationality = $request->nationality;
        $guest->id_code     = $request->id_code;
        $guest->mobile      = $request->mobile;
        $guest->save();
        Session::flash('update', 'Your information is updated.');
        return redirect('/dashbord');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        Guest::destroy($guest->id);
        return redirect('/hotel');
    }

    public function reservation() {
        $available_rooms = Room::where('status', '=', '1')->get();
        return view('reservation', compact('available_rooms'));
    }

    public function dashbord() {
        $new_guest = Guest::all()->last();
        return view('/dashbord', compact('new_guest'));
    }

}
