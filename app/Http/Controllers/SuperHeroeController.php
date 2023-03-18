<?php

namespace App\Http\Controllers;

use App\Models\SuperHeroe;
use Illuminate\Http\Request;

class SuperHeroeController extends Controller
{
    public function index()
    {
        $supers=SuperHeroe::all();
        return view('index',compact('supers'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       
        try {
            $path = $request->file('img')->store('public', 'local');
            SuperHeroe::create([
                'nombre'=>$request->nombre,
                'apodo'=>$request->apodo,
                'img'=>$path,
                'adicional'=>$request->adicional
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','No se registro con exito'.$th->getMessage());
        }
       
         return redirect()->back()->with('success','Se registro con exito');
    }
    public function edit( $id)
    {
       $super=SuperHeroe::find($id);
       return view('edit',compact('super'));
    }
    public function show()
    {
        # code...
    }

    public function update(Request $request,$id)
    {
       try {
        $super=SuperHeroe::find($id)->update([
            'nombre'=>$request->nombre,
                'apodo'=>$request->apodo,
                
                'adicional'=>$request->adicional
        ]);

        } catch (\Throwable $th) {
            return redirect()->back()->with('error','No se actualizo con exito'.$th->getMessage());
        }
       
         return redirect()->back()->with('success','Se actualizo con exito');
    }
    public function delete($id)
    {
        try {
            SuperHeroe::destroy($id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Ocurrio algo inesperado'.$th->getMessage());
        }
        return redirect()->back()->with('success','Se elimino con exito');
    }
}
