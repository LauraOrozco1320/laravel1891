<?php

namespace App\Http\Controllers;
use App\models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){

        return view('curso.create');

    }
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
        return view ('curso.listar',compact('cursos')) ;
        //return $cursos;
    }

    public function store(Request $request){

      $curso= new Curso();
      $curso-> name=$request->name;
      $curso-> descripcion =$request->descripcion ;
      $curso->save();
      return $curso;
    }

    public function show(Curso $Curso) {
       
     
        return view('curso.show', compact('Curso'));

    }

    public function destroy(Curso $Curso) {
        $Curso->delete();
        return redirect()->route('curso.index');
    }
}
