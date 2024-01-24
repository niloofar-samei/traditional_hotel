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

        $check_selected_room = Room::where('id', '=', $request->room_number)->get();
        
        if ($check_selected_room[0]->status == '0') {
            return back()->withErrors('Selected room is occupied. Please select an available room.');
        }else{
          $new_guest->room_number = $request->room_number;
          $selected_room = $request->room_number;
        }

        $new_guest->save();

        $new_guest->room()->attach($selected_room);

        $room = Room::where('id', '=', $selected_room)->first();
        $room->status = 0;
        $room->save();

        //Room::find($room_number)->new_guests()->attach(1);

        //$a = Room::find(10);
        //$a->new_guests()->attach(1);

        Session::flash('status', 'Your room is reserved!');
        return redirect()->route('reservation', $selected_room);
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

    public function reservation($room_number) {
        $selected_room = $room_number;
        return view('reservation', compact('selected_room'));
    }

    public function dashbord() {
        $new_guest = Guest::all()->last();
        return view('/dashbord', compact('new_guest'));
    }

}
