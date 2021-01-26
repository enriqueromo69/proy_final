<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Ventadetalle;

class EjemploController extends Controller
{
    //@
    public function llamada(Request $request){
        return "Funciono el metodo.".$request->vari;
    } 
    public function llamada_tres(Request $request){
        $vari2=$request->vari;
        return view('ejemplo.inicio',compact('vari2'));
    } 

    public function boleta(Request $request){
        $vari2=$request->vari;
        return view('ejemplo.boleta',compact('vari2'));
    } 
    public function generarpdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

    }

    public function generarpdf_h(Request $request){

        $venta= Venta::where('idventa',$request->id)->first();

        $detvent=Ventadetalle::where('idventa',$request->id)->get();
        //$pdf = \App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Test</h1>');
        $vari2="Ejemplo de la creacion de boletas";
        $pdf = \App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('ejemplo.boleta',compact('vari2','venta','detvent'));
        //return $pdf->download('invoice.pdf');
        return $pdf->stream();

    }



    public function ejemplodos(){
        return "Ejemplo dos";
    }
}
