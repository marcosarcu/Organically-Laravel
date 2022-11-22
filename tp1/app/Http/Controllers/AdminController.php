<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class AdminController extends Controller
{
    // Index
    public function index()
    {
        return view('/admin/index', [
            'title' => 'Panel de Adminstración'
        ]
    );
    }

    // Services ABM

    public function servicesAdmin()
    {
        $services = Service::all();
        return view('/admin/servicesAdmin', [
            'services' => $services,
            'title' => 'Administrar Servicios'
        ]);
    }

    public function editService($id)
    {
        return view('/admin/editService', [
            'title' => 'Editar Servicio',
            'service' => Service::find($id)
        ]);
    }

    public function newService()
    {
        return view('/admin/newService', [
            'title' => 'Nuevo Servicio'
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
        if(Service::find($id)->update($data)){
            return redirect()->route('admin')->with('success', 'Servicio actualizado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Error al actualizar el servicio');
        }
    }

    public function confirmDeleteService($id){
        return view('/admin/confirmDeleteService', [
            'title' => 'Confirmar eliminación',
            'service' => Service::find($id)
        ]);
    }

    public function deleteService($id)
    {
        Service::find($id)->delete();
        return redirect()->route('admin');
    }

    // Articles ABM

    public function articlesAdmin()
    {
        $articles = Article::with('category')->get();
        return view('/admin/articlesAdmin', [
            'articles' => $articles,
            'title' => 'Administrar Artículos'
        ]);
    }

    public function newArticle()
    {
        $categories = \App\Models\Category::all();
        return view('/admin/newArticle', [
            'title' => 'Nuevo artículo',
            'categories' => $categories
        ]);
    }

    public function storeArticle(Request $request)
    {
        $request->validate(Article::VALIDATE_RULES, Article::VALIDATE_MESSAGES);
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = date('YmdHis') . "_" . \Str::slug($data['title']) . "." . $image->extension();
            $image->move(public_path('imgs'), $data['image']);
        } else{
            $data['image'] = 'default.jpg';
        }
        if($data['image_alt'] == null){
            $data['image_alt'] = 'Imagen del artículo \'' . $data['title'] . '\'';
        }

        if(Article::create($data)){
            return redirect()->route('admin')->with('success', 'Artículo creado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Error al crear el artículo');
        }
    }

    public function editArticle($id)
    {
        $categories = \App\Models\Category::all();
        return view('/admin/editArticle', [
            'title' => 'Editar artículo',
            'article' => Article::find($id),
            'categories' => $categories
        ]);
    }

    public function updateArticle(Request $request, $id)
    {
        $request->validate(Article::VALIDATE_RULES, Article::VALIDATE_MESSAGES);
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = date('YmdHis') . "_" . \Str::slug($data['title']) . "." . $image->extension();
            $image->move(public_path('imgs'), $data['image']);
        }
        if(Article::find($id)->update($data)){
            return redirect()->route('admin')->with('success', 'Artículo actualizado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Error al actualizar el artículo');
        }
    }

    public function confirmDeleteArticle($id){
        return view('/admin/confirmDeleteArticle', [
            'title' => 'Confirmar eliminación',
            'article' => Article::find($id)
        ]);
    }

    public function deleteArticle($id)
    {
        if(Article::find($id)->delete()){
            return redirect()->route('admin')->with('success', 'Artículo eliminado con éxito');
        } else {
            return redirect()->route('admin')->with('error', 'Error al eliminar el artículo');
        }
    }

    // Users ABM

    public function usersAdmin()
    {
        $users = User::with('contractedService')->get();


        // $users = User::all();
        // $usersWithService = [];
        // foreach ($users as $user) {
        //     $contractedService = Service::find($user->contractedServiceId);
        //     if($contractedService != null){
        //         $user->contractedService = $contractedService->name;
        //     } else {
        //         $user->contractedService = 'Sin servicio contratado';
        //     }
        //     $usersWithService[] = $user;
        // }

        return view('/admin/usersAdmin', [
            'users' => $users,
            'title' => 'Administrar Usuarios'
        ]);
    }

    public function makeAdmin (){
        $user = User::find(request('id'));
        $user->admin = true;
        $user->save();
        return redirect()->route('usersAdmin')->with('success', 'Usuario actualizado con éxito');
    }

    public function removeAdmin(){
        $user = User::find(request('id'));
        $user->admin = false;
        $user->save();
        return redirect()->route('usersAdmin')->with('success', 'Usuario actualizado con éxito');
    }

    public function confirmDeleteUser($id){
        return view('/admin/confirmDeleteUser', [
            'title' => 'Confirmar eliminación',
            'user' => User::find($id)
        ]);
    }

    public function deleteUser($id)
    {
        if(User::find($id)->delete()){
            return redirect()->route('usersAdmin')->with('success', 'Usuario eliminado con éxito');
        } else {
            return redirect()->route('usersAdmin')->with('error', 'Error al eliminar el usuario');
        }
    }


}
