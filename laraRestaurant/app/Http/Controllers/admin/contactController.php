<?php

namespace App\Http\Controllers\admin;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function viewcontact()
    {
        $contact = contact::first();
        if (!$contact) {
            $contact = new contact();
            $contact->address = "Moghbazar, Dhaka: 1217";
            $contact->phone = "1234567890";
            $contact->email = "dev.mrasen@gmail.com";
            $contact->fb_link = "https://www.facebook.com";
            $contact->twitter_link = "https://www.twitter.com";
            $contact->yt_link = "https://www.youtube.com";
            $contact->linkedin_link = "https://www.linkedin.com";
            $contact->save();
        }

        return view("admin.contact.view-contact", compact('contact'));
    }

    public function editContact()
    {
        $contact = contact::first();
        return view("admin.contact.edit-contact", compact('contact'));
    }

    public function editcontactSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "address" => "required|string",
                "phone" => "required|numeric|digits:10",
                "email" => "required|email",
                "fb_link" => "string",
                "twitter_link" => "string",
                "yt_link" => "string",
                "linkedin_link" => "string",
            ],
        );

        $contact = contact::first();
        $contact->address = $req->address;
        $contact->phone = $req->phone;
        $contact->email = $req->email;
        $contact->fb_link = $req->fb_link;
        $contact->twitter_link = $req->twitter_link;
        $contact->yt_link = $req->yt_link;
        $contact->linkedin_link = $req->linkedin_link;
        $contact->update();

        return redirect('admin/view-contact')->with('msg1', 'Contact section updated successfully!');
    }
}
