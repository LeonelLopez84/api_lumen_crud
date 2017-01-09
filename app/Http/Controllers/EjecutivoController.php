<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use App\Entities\Ejecutivos as Ejecutivos;
use Illuminate\Http\Request;

class EjecutivoController extends Controller
{
    use Helpers;

    public function __construct()
    {
       $this->middleware('oauth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ejecutivos::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ejecutivo=new Ejecutivos;
        $ejecutivo->Nombre=$request->input('Nombre');
        $ejecutivo->ApellidoPaterno=$request->input('ApellidoPaterno');
        $ejecutivo->ApellidoMaterno=$request->input('ApellidoMaterno');
        if($ejecutivo->save()){
            return response()->json($ejecutivo);
        }else{
            return response()->json("Error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejecutivo=Ejecutivos::findOrFail($id);

        return response()->json($ejecutivo);
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
        $ejecutivo=Ejecutivos::find($id);
        $ejecutivo->Nombre=$request->input('Nombre');
        $ejecutivo->ApellidoPaterno=$request->input('ApellidoPaterno');
        $ejecutivo->ApellidoMaterno=$request->input('ApellidoMaterno');
        if($ejecutivo->save()){
            return response()->json($ejecutivo);
        }else{
            return response()->json("Error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ejecutivo=Ejecutivos::where('ID','=',$id);
        if($ejecutivo->delete()){
            return response()->json(["borrado"]);
        }else{
            return response()->json($ejecutivo);
        }
       
    }
}
