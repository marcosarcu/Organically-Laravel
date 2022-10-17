<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view('/admin/index', [
            'services' => $services,
            'title' => 'Admin'
        ]
    );
    }

    public function editService($id)
    {
        return view('/admin/editService', [
            'title' => 'Admin',
            'service' => Service::find($id)
        ]);
    }

    public function newService()
    {
        return view('/admin/newService', [
            'title' => 'Admin'
        ]);
    }

    public function storeService(Request $request)
    {
        $request->validate(Service::VALIDATE_RULES, Service::VALIDATE_MESSAGES);
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = date('YmdHis') . "_" . \Str::slug($data['name']) . "." . $image->extension();
            $image->move(public_path('imgs'), $data['image']);
        } else{
            $data['image'] = 'default.jpg';
        }
        if($data['image_alt'] == null){
            $data['image_alt'] = 'Imagen del proyecto \'' . $data['name'] . '\'';
        }

        if(Service::create($data)){
            return redirect()->route('admin')->with('success', 'Servicio creado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Error al crear el servicio');
        }
    }

    public function updateService(Request $request, $id)
    {
        $request->validate(Service::VALIDATE_RULES, Service::VALIDATE_MESSAGES);
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = date('YmdHis') . "_" . \Str::slug($data['name']) . "." . $image->extension();
            $image->move(public_path('imgs'), $data['image']);
        }
        Service::find($id)->update($data);
        return redirect()->route('admin');
    }

    public function confirmDeleteService($id){
        return view('/admin/confirmDeleteService', [
            'title' => 'Admin',
            'service' => Service::find($id)
        ]);
    }

    public function deleteService($id)
    {
        Service::find($id)->delete();
        return redirect()->route('admin');
    }
}
