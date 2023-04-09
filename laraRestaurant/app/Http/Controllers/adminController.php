<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\team;
use App\Models\reservation;
use App\Models\testimonial;
use Carbon\Carbon;

class adminController extends Controller
{
    public function index()
    {
        $num_menus = menu::count();
        $num_reservations = reservation::count();
        $num_teams = team::count();
        $num_testimonials = testimonial::count();

        // Reservattions Area Chart Start
        $reservations = reservation::get()->groupBy(function ($reservations) {
            return Carbon::parse($reservations->created_at)->format('M');
        });

        $r_months = [];
        $r_monthCount = [];
        foreach ($reservations as $r_month => $values) {
            $r_months[] = $r_month;
            $r_monthCount[] = count($values);
        }
        // Reservattions Area Chart End

        // Teams Pie Start

        $teams = team::get()->groupBy(function ($teams) {
            return Carbon::parse($teams->created_at)->format('M-Y');
        });

        // dd($teams);
        $t_months = [];
        $t_monthCount = [];
        foreach ($teams as $t_month => $values) {
            $t_months[] = $t_month;
            $t_monthCount[] = count($values);
        }
        // Teams Pie Chart End

        return view("admin.dashboard", compact('num_menus', 'num_reservations', 'num_teams', 'num_testimonials', 'r_months', 'r_monthCount', 't_months', 't_monthCount'));
    }
}
