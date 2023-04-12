<?php

namespace App\Http\Controllers\admin;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{
    public function viewAbout()
    {
        $about = about::first();
        if (!$about) {
            $about = new about();
            $about->restaurant_name = "laraResta";
            $about->tagline = "Enjoy Our Delicious Meal";
            $about->short_desc = "Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet";
            $about->exp_years = "15";
            $about->team_members = "50";
            $about->ad_video_link = "https://www.youtube.com/video-link";
            $about->save();
        }

        return view("admin.about.view-about", compact('about'));
    }

    public function editAbout()
    {
        $about = about::first();
        return view("admin.about.edit-about", compact('about'));
    }

    public function editAboutSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "restaurant_name" => "required|string",
                "tagline" => "required|max:50",
                "short_desc" => "required| max: 300",
                "hero_img" => "mimes:jpg,png,jpeg",
                "exp_years" => "required|numeric",
                "team_members" => "required|numeric",
                "image1" => "mimes:jpg,png,jpeg",
                "image2" => "mimes:jpg,png,jpeg",
                "image3" => "mimes:jpg,png,jpeg",
                "image4" => "mimes:jpg,png,jpeg",
                "ad_video_link" => "required|string",
            ],
        );

        $about = about::first();
        $about->restaurant_name = $req->restaurant_name;
        $about->tagline = $req->tagline;
        $about->short_desc = $req->short_desc;
        $about->exp_years = $req->exp_years;
        $about->team_members = $req->team_members;
        $about->ad_video_link = $req->ad_video_link;

        if ($req->hero_img) {
            if ($about->hero_img) {
                $destination = 'storage/about/' . $about->hero_img;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('hero_img')->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $req->file('hero_img')->storeAs('public/about/', $filename);
            $about->hero_img = $filename;
        }

        if ($req->image1) {
            if ($about->image1) {
                $destination = 'storage/about/' . $about->image1;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('image1')->getClientOriginalExtension();
            $filename = "image1" . time() . "." . $extension;
            $req->file('image1')->storeAs('public/about/', $filename);
            $about->image1 = $filename;
        }

        if ($req->image2) {
            if ($about->image2) {
                $destination = 'storage/about/' . $about->image2;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('image2')->getClientOriginalExtension();
            $filename = "image2" . time() . "." . $extension;
            $req->file('image2')->storeAs('public/about/', $filename);
            $about->image2 = $filename;
        }


        if ($req->image3) {
            if ($about->image3) {
                $destination = 'storage/about/' . $about->image3;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('image3')->getClientOriginalExtension();
            $filename = "image3" . time() . "." . $extension;
            $req->file('image3')->storeAs('public/about/', $filename);
            $about->image3 = $filename;
        }


        if ($req->image4) {
            if ($about->image4) {
                $destination = 'storage/about/' . $about->image4;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('image4')->getClientOriginalExtension();
            $filename = "image4" . time() . "." . $extension;
            $req->file('image4')->storeAs('public/about/', $filename);
            $about->image4 = $filename;
        }

        $about->update();

        return redirect('admin/view-about')->with('msg1', 'About section updated successfully!');
    }
}
