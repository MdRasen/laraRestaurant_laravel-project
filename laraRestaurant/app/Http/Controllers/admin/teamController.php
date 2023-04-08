<?php

namespace App\Http\Controllers\admin;

use App\Models\team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class teamController extends Controller
{
    public function addTeam()
    {
        return view("admin.teams.add-team");
    }

    public function addTeamSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "designation" => "required",
                "profile_image" => "required|mimes:jpg,png,jpeg",
            ],
        );

        $team = new team();
        $team->name = $req->name;
        $team->designation = $req->designation;

        $extension = $req->file('profile_image')->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $req->file('profile_image')->storeAs('public/team_images/', $filename);
        $team->profile_image = $filename;

        $team->fb_link = $req->fb_link;
        $team->twitter_link = $req->twitter_link;
        $team->insta_link = $req->insta_link;
        $team->status = $req->status;
        $team->save();
        return Redirect('admin/add-team')->with('msg1', 'Team has been created successfully!');
    }

    public function viewTeam()
    {
        $teams = team::get();
        return view("admin.teams.view-team", compact('teams'));
    }

    public function editTeam($team_id)
    {
        $team = team::where('id', '=', $team_id)->first();
        return view("admin.teams.edit-team", compact('team'));
    }

    public function editTeamSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "designation" => "required",
                "profile_image" => "mimes:jpg,png,jpeg",
            ],
        );

        $team = team::where('id', '=', $req->team_id)->first();
        $team->name = $req->name;
        $team->designation = $req->designation;

        if ($req->profile_image) {
            if ($team->profile_image) {
                $destination = 'storage/team_images/' . $team->profile_image;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('profile_image')->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $req->file('profile_image')->storeAs('public/team_images/', $filename);
            $team->profile_image = $filename;
        }

        $team->fb_link = $req->fb_link;
        $team->twitter_link = $req->twitter_link;
        $team->insta_link = $req->insta_link;
        $team->status = $req->status;
        $team->save();
        return Redirect('admin/view-team')->with('msg1', 'Team has been updated successfully!');
    }

    public function deleteTeam(Request $req)
    {
        $team = team::where('id', '=', $req->team_id)->first();
        if ($team->profile_image) {
            $destination = 'storage/team_images/' . $team->profile_image;
            if (file_exists(public_path($destination))) {
                unlink($destination);
            }
        }
        $team->delete();
        return redirect('admin/view-team')->with('msg1', 'Team has been deleted successfully!');
    }
}
