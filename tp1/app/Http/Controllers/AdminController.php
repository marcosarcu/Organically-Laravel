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

    public function editService()
    {
        return view('/admin/editService', [
            'title' => 'Admin'
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
        }
        Service::create($data);
        return redirect()->route('admin');
    }
}
