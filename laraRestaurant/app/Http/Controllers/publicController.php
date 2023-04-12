<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\team;
use App\Models\about;
use App\Models\contact;
use App\Models\service;
use App\Models\reservation;
use App\Models\testimonial;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function index()
    {
        $about = about::first();
        $services = service::where('status', '=', 'Active')->get()->take(4);
        $menus = menu::where('status', '=', 'Active')->get();
        $breakfast_menus = menu::where('status', '=', 'Active')->where('category', '=', 'Breakfast')->get()->take(8);
        $lunch_menus = menu::where('status', '=', 'Active')->where('category', '=', 'Lunch')->get()->take(8);
        $dinner_menus = menu::where('status', '=', 'Active')->where('category', '=', 'Dinner')->get()->take(8);
        $teams = team::where('status', '=', 'Active')->where('designation', '=', 'Chef')->get()->take(4);
        $testimonials = testimonial::where('status', '=', 'Active')->get();
        $contact = contact::first();
        return view("index", compact('about', 'services', 'menus', 'breakfast_menus', 'lunch_menus', 'dinner_menus', 'teams', 'testimonials', 'contact'));
    }

    public function reservationSubmit(Request $req)
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
        $reservation->status = "Pending";
        $reservation->save();
        return Redirect('/#reservation')->with('msg1', 'Reservation has been submitted!');
    }
}
