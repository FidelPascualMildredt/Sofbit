<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        return view('users.create', compact('roles'));
        // $roles = Rol::where('roles','users')->get();
        // return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //el primer parametro es para indicar el nombre de como se encuentra en la BD y el segundo es el nombre de como lo colocaste en el formulario
        User::create([
            'name' => $request->get('name'),
         'lastname' => $request->get('lastname'),
         'nickname' => $request->get('nickname'),
         'birthdate' => $request->get('birthdate'),
         'gender' => $request->get('gender'),
         'role_id' => $request->get('rol'),
         'email' => $request->get('email'),
         'password' => $request->get('password')

           ]);
        //    return ('El Usuario se ha actualizado correctamente');
           return ('El Usuario se a creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
         'name' => $request->get('name'),
         'lastname' => $request->get('apellido'),
         'nickname' => $request->get('nickname'),
         'birthdate' => $request->get('birthdate'),
         'gender' => $request->get('gender'),
        //  'role_id' => $request->get('Rol'),
         'email' => $request->get('email'),
         'password' => $request->get('password')
        ]);

        return ('El Usuario se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return ('El usuario se a eliminado');
    }
}
