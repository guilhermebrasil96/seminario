<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CruduserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return \response($usuarios);
    }
    public function roles()
    {
        $usuarios = User::all();
        return \response($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $profileImage = $request->file('foto');


        if ($profileImage != null) {
            $profileImageSaveAsName = time() ."-profile." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/app/public/uploads/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        } else {

            $profileImage = $request->file('foto');
            $profileImageSaveAsName = "default.png";
            $upload_path = 'storage/app/public/uploads/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
        }

        $usuario = new User;

        $usuario->codigo = $request->codigo;

        $usuario->user_name = $request->user_name;
        $usuario->name = $request->name;
        $usuario->last_name = $request->last_name;
        $usuario->sex = $request->sex;
        $usuario->born_date = $request->born_date;
        $usuario->email = $request->email;
        $usuario->dpi = $request->dpi;
        $usuario->tel1 = $request->tel1;
        $usuario->tel2 = $request->tel2;
        $usuario->password = Hash::make($request->password);
        $usuario->foto = $profile_image_url;
        $usuario->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {




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
        
        $profileImage = $request->file('foto');


        if ($profileImage != null) {
            $profileImageSaveAsName = time() ."-profile." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/app/public/uploads/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);

            
        $usuario = User::findOrfail($request->id);
        $usuario->codigo = $request->codigo;
        $usuario->user_name = $request->user_name;
        $usuario->last_name = $request->last_name;
        $usuario->sex = $request->sex;
        $usuario->born_date = $request->born_date;
        $usuario->email = $request->email;
        $usuario->dpi = $request->dpi;
        $usuario->tel1 = $request->tel1;
        $usuario->tel2 = $request->tel2;
        
        $usuario->foto = $profile_image_url;
        $usuario->save();
            return $usuario;

        } else {


            $usuario = User::findOrfail($request->id);
            $usuario->codigo = $request->codigo;
            $usuario->user_name = $request->user_name;
            $usuario->last_name = $request->last_name;
            $usuario->sex = $request->sex;
            $usuario->born_date = $request->born_date;
            $usuario->email = $request->email;
            $usuario->dpi = $request->dpi;
            $usuario->tel1 = $request->tel1;
            $usuario->tel2 = $request->tel2;
          
            return $usuario;


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    
        $usuario = User::destroy($request->id);
        return $usuario;

    }
}
