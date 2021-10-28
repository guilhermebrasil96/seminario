<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class BomberosController extends Controller
{
    function bomberos() {

        $bomberos = DB::select('select * from boms order by nombre');

        return view('/bomberos')->with('bomberos', $bomberos);

    }

    function index(){

        $bomberos = DB::select('select * from boms order by nombre');

        return view('/bomberos')->with('bomberos', $bomberos);

    }

    function registrar(){

        return view('registrar');
    }

    public function addBombero()
    {

        $codigo = $_POST['codigo'];
        $usuario = $_POST['user_name'];
        $name = $_POST['name'];
        $apellidos = $_POST['last_name'];
        $sexo = $_POST['sex'];
        $birthday = $_POST['born_date'];
        $correo = $_POST['email'];
        $dpi = $_POST['dpi'];
        $telefono1 = $_POST['tel1'];
        $telefono2 = $_POST['tel2'];
        $contrasena = $_POST['password'];

        $insert = DB::insert('insert into boms (codigo, usuario, nombre, apellidos, sexo, birthday, correo, dpi, telefono1, telefono2, contrasena) values (?, ?, ?,?, ?, ?,?, ?, ?, ?, ?)', 
        [$codigo, $usuario, $name, $apellidos, $sexo, $birthday, $correo, $dpi, $telefono1, $telefono2, $contrasena ]);

        return redirect()->back()->with('success', 'Agregado bombero(a) !');

    }

    public function editarBombero()
    {

        $id = $_GET['bombero'];
        $bombero = DB::select('select * from boms where id =' . $id);

        return view('editar-bombero')->with('bomberos', $bombero);
    }

    public function editBombero()
    {

        $id = $_GET['bombero'];

        $codigo = $_POST['codigo'];
        $usuario = $_POST['user_name'];
        $name = $_POST['name'];
        $apellidos = $_POST['last_name'];
        $sexo = $_POST['sex'];
        $birthday = $_POST['born_date'];
        $correo = $_POST['email'];
        $dpi = $_POST['dpi'];
        $telefono1 = $_POST['tel1'];
        $telefono2 = $_POST['tel2'];
        $contrasena = $_POST['password'];

        $update = DB::update('update boms set 

                codigo= "' . $codigo . '", 
                usuario= "' . $usuario . '",
                nombre= "' . $name . '",
                apellidos= "' . $apellidos . '",
                sexo= "' . $sexo . '",
                birthday= "' . $birthday . '",
                correo= "' . $correo . '",
                dpi= "' . $dpi . '",
                telefono1= "' . $telefono1 . '",
                telefono2= "' . $telefono2 . '",
                contrasena= "' . $contrasena . '"

                where id=' . $id);

        if ($update) {
            return redirect()->back()->with('success', 'Actualizado !');
        } else {
            return redirect()->back()->with('error', 'Error: entra en contacto con la administración !');
        }
    }

    public function deleteBombero()
    {

        $id = $_GET['bombero'];

        $delete = DB::select('delete from boms where id =' . $id);

        return redirect()->back()->with('success', 'Borrado !');
    }

    function roles() {

        $roles = DB::select('select * from roles order by name');

        return view('/roles')->with('roles', $roles);

    }

    function addRol(){

        return view('add-rol');

    }

    public function registrarRol()
    {

        $name = $_POST['nameRol'];

        $insert = DB::insert('insert into roles (name) values (?)', 
        [$name]);

        return redirect()->back()->with('success', 'Agregado rol !');

    }






    public function editarRol()
    {

        $id = $_GET['rol'];
        $roles = DB::select('select * from roles where id =' . $id);

        return view('editar-rol')->with('roles', $roles);
    }

    public function editRol()
    {

        $name = $_POST['nameRol'];
        $id = $_GET['rol'];

        $update = DB::update('update roles set 

                name= "' . $name . '"

                where id=' . $id);

        if ($update) {
            return redirect()->back()->with('success', 'Actualizado !');
        } else {
            return redirect()->back()->with('error', 'Error: entra en contacto con la administración !');
        }
    }

    public function deleteRol()
    {

        $id = $_GET['rol'];

        $delete = DB::select('delete from roles where id =' . $id);

        return redirect()->back()->with('success', 'Borrado !');
    }
}
