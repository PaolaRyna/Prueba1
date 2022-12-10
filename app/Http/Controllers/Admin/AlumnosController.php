<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        $alumnos = Alumnos::all();
        return view('admin.alumnos')->with('alumnos', $alumnos);
    }

    public function Alums(Request $request)
    {

        $alumnos = new Alumnos();


        $alumnos->Nombre_Alumno = $request->input('Nombre_Alumno');
        $alumnos->matricula = $request->input('matricula');
        $alumnos->edad = $request->input('edad');
        $alumnos->grupo = $request->input('grupo');
        $alumnos->email = $request->input('email');

        $alumnos->save();

        return redirect('/alumnos')->with('status', 'Data Added for About Us');
    }

    public function edit($id){
        $alumnos= Alumnos::findOrFail($id);
        
       return view('admin.abouts.edit')->with('alumnos',$alumnos);

    }

    public function update(Request $request, $id){

        $alumnos= Alumnos::findOrFail($id);
        $alumnos-> Nombre_Alumno = $request-> input('Nombre_Alumno');
        $alumnos-> matricula = $request-> input('matricula');
        $alumnos-> edad = $request-> input('edad');
        $alumnos-> grupo = $request-> input('grupo');
        $alumnos-> email = $request-> input('email');
        $alumnos -> update();

        
       return redirect('alumnos')->with('status','Data Update for Abaut Us ');

    }
    public function delete($id){
        $alumnos= Alumnos::findOrFail($id);
        $alumnos -> delete();

        return redirect('alumnos')->with('status','Data Delete for Abaut Us ');


    }
    



}
