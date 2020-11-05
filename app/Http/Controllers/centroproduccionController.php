<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api\ApiRest;

class centroproduccionController extends Controller
{
    public function index(){

        $datas = ApiRest::get('centros?page');
        //dd($datas);
        return view('centroproduccion.index',compact('datas'));
    }

    public function create(){
        return view('centroproduccion.create');
    }

    public function store(Request $request){
        
        $data = [
            'id_sucursal' => $request->id_sucursal,
            'detalle' => $request->detalle,
            'activo' => $request->activo,
        ];

        $data=ApiRest::post('centros',$data);
        if ($data['status']=='ok')
            return redirect()->route('centroproduccion.index');
        else
            return redirect()->back();

    }

    public function show(){
        
    }

    public function edit($id)
    {
        $data=ApiRest::getData('centros',$id);
        return view('centroproduccion.edit',compact('data'));
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
        //llenamos datos del formulario en un array
        $data = [
            'id' =>$id,
            'id_sucursal' => $request->id_sucursal,
            'detalle' => $request->detalle,
            'activo' => $request->activo,
        ];

        $data=ApiRest::put('centros',$data);
        if ($data['status']=='ok')
            return redirect()->route('centroproduccion.index');
        else
            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = ApiRest::delete('centros',['id' => $id]);
        //dd($response);
        if ($response=='ok')
            return redirect()->route('centroproduccion.index');
        else
            return redirect()->back();
    }
}
?>