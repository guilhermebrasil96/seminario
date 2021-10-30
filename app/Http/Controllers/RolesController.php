<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $qs = Roles::all();
        return $qs;
    }

    public function list() {

        $rs = $this->index();

        return view('/roles')->with('roles', $rs);

    }

    function addRol(){

        return view('add-rol');

    }

    public function newRol(Request $request) {

        $new = $this->store($request);

        return redirect()->back()->with('success', 'Agregado rol !');
    }

    public function store(Request $request) {

        $rol = new Roles();

        $rol->name = $_POST['nameRol'];

        $rol->save();

        return $rol;

    }

    public function destroy ($rol) {

        $destroy = Roles::destroy($rol);

        return redirect('/roles/list');

    }

    public function edit($roles) {

        $roles = DB::select('select * from roles where id =' . $roles);

        return view('/editar-rol')->with('roles', $roles);

    }

    public function update (Request $request, $rol) {


        $name = $_POST['nameRol'];


        $update = DB::update('update roles set 

                name= "' . $name . '"

                where id=' . $rol);

        if ($update) {
            return redirect()->back()->with('success', 'Actualizado !');
        } else {
            return redirect()->back()->with('error', 'Error: entra en contacto con la administración !');
        }

    }

    public function show(Roles $roles, $id) {

        $registroEncontrado = Roles::find($id);
        return $registroEncontrado;

    }



}
