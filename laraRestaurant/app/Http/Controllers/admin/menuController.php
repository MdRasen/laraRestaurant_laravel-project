<?php

namespace App\Http\Controllers\admin;

use App\Models\menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class menuController extends Controller
{
    public function addMenu()
    {
        return view("admin.menus.add-menu");
    }

    public function addMenuSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "menu_name" => "required|string",
                "category" => "required",
                "menu_image" => "required|mimes:jpg,png,jpeg",
                "short_desc" => "required|string|max:100",
                "price" => "required|numeric",
                "status" => "required",
            ],
        );

        $menu = new menu();
        $menu->menu_name = $req->menu_name;
        $menu->category = $req->category;

        $extension = $req->file('menu_image')->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $req->file('menu_image')->storeAs('public/menu_images/', $filename);
        $menu->menu_image = $filename;

        $menu->short_desc = $req->short_desc;
        $menu->price = $req->price;
        $menu->status = $req->status;
        $menu->save();
        return Redirect('admin/add-menu')->with('msg1', 'Menu has been created successfully!');
    }

    public function viewMenu()
    {
        $menus = menu::get();
        return view("admin.menus.view-menu", compact('menus'));
    }

    public function editMenu($menu_id)
    {
        $menu = menu::where('id', '=', $menu_id)->first();
        return view("admin.menus.edit-menu", compact('menu'));
    }

    public function editMenuSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "menu_name" => "required|string",
                "category" => "required",
                "menu_image" => "mimes:jpg,png,jpeg",
                "short_desc" => "required|string|max:100",
                "price" => "required|numeric",
                "status" => "required",
            ],
        );

        $menu = menu::where('id', '=', $req->menu_id)->first();
        $menu->menu_name = $req->menu_name;
        $menu->category = $req->category;

        if ($req->menu_image) {
            if ($menu->menu_image) {
                $destination = 'storage/menu_images/' . $menu->menu_image;
                if (file_exists(public_path($destination))) {
                    unlink($destination);
                }
            }

            $extension = $req->file('menu_image')->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $req->file('menu_image')->storeAs('public/menu_images/', $filename);
            $menu->menu_image = $filename;
        }

        $menu->short_desc = $req->short_desc;
        $menu->price = $req->price;
        $menu->status = $req->status;
        $menu->update();
        return Redirect('admin/view-menu')->with('msg1', 'Menu has been updated successfully!');
    }

    public function deleteMenu(Request $req)
    {
        $menu = menu::where('id', '=', $req->menu_id)->first();
        if ($menu->menu_image) {
            $destination = 'storage/menu_images/' . $menu->menu_image;
            if (file_exists(public_path($destination))) {
                unlink($destination);
            }
        }
        $menu->delete();

        return redirect('admin/view-menu')->with('msg1', 'Menu has been deleted successfully!');
    }
}
