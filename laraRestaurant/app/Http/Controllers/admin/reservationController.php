<?php

namespace App\Http\Controllers\admin;

use App\Models\reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reservationController extends Controller
{
    public function addReservation()
    {
        return view("admin.reservations.add-reservation");
    }

    public function addReservationSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "email" => "required|email",
                "reservation_time" => "required",
                "num_guest" => "required|numeric",
                "special_req" => "max:250",
            ],
        );

        $reservation = new reservation();
        $reservation->name = $req->name;
        $reservation->email = $req->email;
        $reservation->reservation_time = $req->reservation_time;
        $reservation->num_guest = $req->num_guest;
        $reservation->special_req = $req->special_req;
        $reservation->status = $req->status;
        $reservation->save();
        return Redirect('admin/add-reservation')->with('msg1', 'Reservation has been created successfully!');
    }

    public function viewReservation()
    {
        $reservations = reservation::get();
        return view("admin.reservations.view-reservation", compact('reservations'));
    }

    public function editReservation($reservation_id)
    {
        $reservation = reservation::where('id', '=', $reservation_id)->first();
        return view("admin.reservations.edit-reservation", compact('reservation'));
    }

    public function editReservationSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "email" => "required|email",
                "reservation_time" => "required",
                "num_guest" => "required|numeric",
                "special_req" => "max:250",
            ],
        );

        $reservation = reservation::where('id', '=', $req->reservation_id)->first();
        $reservation->name = $req->name;
        $reservation->email = $req->email;
        $reservation->reservation_time = $req->reservation_time;
        $reservation->num_guest = $req->num_guest;
        $reservation->special_req = $req->special_req;
        $reservation->status = $req->status;
        $reservation->update();
        return Redirect('admin/view-reservation')->with('msg1', 'Reservation has been updated successfully!');
    }

    public function deleteReservation(Request $req)
    {
        $reservation = reservation::where('id', '=', $req->reservation_id)->delete();
        return redirect('admin/view-reservation')->with('msg1', 'Reservation has been deleted successfully!');
    }
}
