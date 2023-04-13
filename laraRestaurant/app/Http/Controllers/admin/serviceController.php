<?php

namespace App\Http\Controllers\admin;

use App\Models\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class serviceController extends Controller
{
    public function addService()
    {
        return view("admin.services.add-service");
    }

    public function addServiceSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "service_name" => "required|string",
                "icon_class" => "required",
                "status" => "required",
                "short_desc" => "required|string|max:200",
            ],
        );

        $service = new service();
        $service->service_name = $req->service_name;
        $service->icon_class = $req->icon_class;
        $service->short_desc = $req->short_desc;
        $service->status = $req->status;
        $service->save();
        return Redirect('admin/add-service')->with('msg1', 'Service has been created successfully!');
    }

    public function viewService()
    {
        $services = service::get();
        return view("admin.services.view-service", compact('services'));
    }

    public function editService($service_id)
    {
        $service = service::where('id', '=', $service_id)->first();
        return view("admin.services.edit-service", compact('service'));
    }

    public function editServiceSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "service_name" => "required|string",
                "icon_class" => "required",
                "status" => "required",
                "short_desc" => "required|string|max:200",
            ],
        );

        $service = service::where('id', '=', $req->service_id)->first();
        $service->service_name = $req->service_name;
        $service->icon_class = $req->icon_class;
        $service->short_desc = $req->short_desc;
        $service->status = $req->status;
        $service->update();
        return Redirect('admin/view-service')->with('msg1', 'Service has been updated successfully!');
    }

    public function deleteService(Request $req)
    {
        $service = service::where('id', '=', $req->service_id)->delete();
        return redirect('admin/view-service')->with('msg1', 'Service has been deleted successfully!');
    }
}
