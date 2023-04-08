<?php

namespace App\Http\Controllers\admin;

use App\Models\testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testimonialController extends Controller
{
    public function addTestimonial()
    {
        return view("admin.testimonials.add-testimonial");
    }

    public function addTestimonialSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "designation" => "required",
                "profile_image" => "required|mimes:jpg,png,jpeg",
                "review_desc" => "required|string|max:350",
            ],
        );

        $testimonial = new testimonial();
        $testimonial->name = $req->name;
        $testimonial->designation = $req->designation;

        $extension = $req->file('profile_image')->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $req->file('profile_image')->storeAs('public/testimonial_images/', $filename);
        $testimonial->profile_image = $filename;

        $testimonial->review_desc = $req->review_desc;
        $testimonial->status = $req->status;
        $testimonial->save();
        return Redirect('admin/add-testimonial')->with('msg1', 'Testimonial has been created successfully!');
    }

    public function viewTestimonial()
    {
        $testimonials = testimonial::get();
        return view("admin.testimonials.view-testimonial", compact('testimonials'));
    }

    public function edittestimonial($testimonial_id)
    {
        $testimonial = testimonial::where('id', '=', $testimonial_id)->first();
        return view("admin.testimonials.edit-testimonial", compact('testimonial'));
    }

    public function edittestimonialSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "name" => "required|string",
                "designation" => "required",
                "profile_image" => "mimes:jpg,png,jpeg",
                "review_desc" => "required|string|max:350",
            ],
        );

        $testimonial = testimonial::where('id', '=', $req->testimonial_id)->first();
        $testimonial->name = $req->name;
        $testimonial->designation = $req->designation;

        if ($req->profile_image) {
            if ($testimonial->profile_image) {
                $destination = 'storage/testimonial_images/' . $testimonial->profile_image;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('profile_image')->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $req->file('profile_image')->storeAs('public/testimonial_images/', $filename);
            $testimonial->profile_image = $filename;
        }

        $testimonial->review_desc = $req->review_desc;
        $testimonial->status = $req->status;
        $testimonial->save();
        return Redirect('admin/view-testimonial')->with('msg1', 'Testimonial has been updated successfully!');
    }

    public function deleteTestimonial(Request $req)
    {
        $testimonial = testimonial::where('id', '=', $req->testimonial_id)->first();
        if ($testimonial->profile_image) {
            $destination = 'storage/testimonial_images/' . $testimonial->profile_image;
            if (file_exists(public_path($destination))) {
                unlink($destination);
            }
        }
        $testimonial->delete();
        return redirect('admin/view-testimonial')->with('msg1', 'Testimonial has been deleted successfully!');
    }
}
