<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boms;
use Illuminate\Support\Facades\DB;

class BomsController extends Controller
{

    public function index()
    {
        $qs = Boms::all();
        return $qs;
    }

    public function store(Request $request) {

        $boms = new Boms();

        $boms->codigo = $_POST['codigo'];
        $boms->usuario = $_POST['user_name'];
        $boms->nombre = $_POST['name'];
        $boms->apellidos = $_POST['last_name'];
        $boms->sexo = $_POST['sex'];
        $boms->birthday = $_POST['born_date'];
        $boms->correo = $_POST['email'];
        $boms->dpi = $_POST['dpi'];
        $boms->telefono1 = $_POST['tel1'];
        $boms->telefono2 = $_POST['tel2'];
        $boms->password = $_POST['password'];
        $boms->rol = $_POST['rol'];

        $boms->save();

        return $boms;

    }

    function registrar(){

        $rol = DB::select('select * from roles');

        return view('registrar')->with('roles', $rol);
    }

    public function list() {

        $rs = $this->index();

        return view('/bomberos')->with('bomberos', $rs);

    }

    public function newBom(Request $request) {

        $new = $this->store($request);

        return redirect()->back()->with('success', 'Agregado bombero(a) !');
    }

    public function show(Boms $boms, $id) {

        $registroEncontrado = Boms::find($id);
        return $registroEncontrado;

    }

    public function destroy ($boms) {

        $destroy = Boms::destroy($boms);

        return redirect('/bomberos/list');

    }

    public function update (Request $request, $boms) {

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
        $rol = $_POST['rol'];

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
                password= "' . $contrasena . '",
                rol= "' . $rol . '"

                where id=' . $boms);

        if ($update) {
            return redirect()->back()->with('success', 'Actualizado !');
        } else {
            return redirect()->back()->with('error', 'Error: entra en contacto con la administración !');
        }

    }

    public function edit($boms) {

        $rol = DB::select('select * from roles');
        $bombero = DB::select('select * from boms where id =' . $boms);

        return view('/editar-bombero')->with('bomberos', $bombero)->with('roles', $rol);

    }

}
