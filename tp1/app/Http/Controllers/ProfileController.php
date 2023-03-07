<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ProfileController extends Controller
{
    public function index()
    {

        $service = Service::find(Auth::user()->contracted_service_id);
        return view('profile.index', [
            'title' => 'Perfil - Organically',
            'user' => Auth::user(), 
            'service' => $service,
        ]);
    }
    public function edit()
    {
        return view('profile.edit', [
            'title' => 'Editar Perfil - Organically',
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ? bcrypt($request->password) : $user->password;
        $user->save();
        return redirect()->route('profile')->with('success', 'Perfil actualizado correctamente');
    }

    public function editPlan(){
        $currentService = Service::find(Auth::user()->contracted_service_id);
        $services = Service::all();
        return view('profile.edit-plan', [
            'title' => 'Editar Plan - Organically',
            'user' => Auth::user(),
            'currentService' => $currentService,
            'services' => $services,
        ]);
    }

    public function confirmDeletePlan(){
        $currentService = Service::find(Auth::user()->contracted_service_id);
        return view('profile.confirm-delete-plan', [
            'title' => 'Confirmar Eliminación de Plan - Organically',
            'user' => Auth::user(),
            'currentService' => $currentService,
        ]);
    }

    public function deletePlan(){
        $user = Auth::user();
        $user->contracted_service_id = null;
        $user->contracted_service_at = null;
        $user->contracted_service_expires_at = null;
        $user->save();
        return redirect()->route('profile')->with('success', 'Subscripción cancelada correctamente');
    }
}
