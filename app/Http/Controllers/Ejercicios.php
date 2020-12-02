<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicios extends Controller
{
    public function index(){
        return view('plantillaController');
    }
/* Secuenciales */
    public function trapecio($baseMayor, $baseMenor, $altura){
        return view('s1_01Controller', [
            'baseMayor'=>$baseMayor,
            'baseMenor'=>$baseMenor,
            'altura'=>$altura
        ]);
    }

    public function cuadrado($lado, $apotema){
        return view('s1_02Controller', [
            'lado'=>$lado,
            'apotema'=>$apotema
        ]);
    }

    public function cono($radio, $altura){
        return view('s1_03Controller', [
            'radio'=>$radio,
            'altura'=>$altura
        ]);
    }

    public function triangulo($base, $altura){
        return view('s1_04Controller', [
            'base'=>$base,
            'altura'=>$altura
        ]);
    }

    public function circunferencia($radio, $longitud){
        return view('s1_05Controller', [
            'radio'=>$radio,
            'longitud'=>$longitud
        ]);
    }

/* Decisiones */
    public function edad($nombre, $edad){
        return view('d2_01Controller')
        ->with('nombre',$nombre)
        ->with('edad',$edad);
    }

    public function sueldo($horasT, $sueldoHora, $sueldo, $extras){
        return view('d2_02Controller')
        ->with('horasT',$horasT)
        ->with('sueldoHora',$sueldoHora)
        ->with('sueldo',$sueldo)
        ->with('extras',$extras);
    }

    public function regalo($cantidad){
        return view('d2_03Controller')
        ->with('cantidad',$cantidad);
    }

    public function estacionamiento($horas){
        return view('d2_04Controller')
        ->with('horas',$horas);
    }

    public function calificaciones($nombre, $calificacion){
        return view('d2_05Controller')
        ->with('nombre',$nombre)
        ->with('calificacion',$calificacion);
    }

/* Ciclos */
    public function profesor($salarioInicial, $salarioIncrement){
        return view('c3_01Controller', [
            'salarioInicial'=>$salarioInicial,
            'salarioIncrement'=>$salarioIncrement
        ]);
    }

    public function cantidades($y, $cantidad, $cero, $menores, $mayores, $numero){
        return view('c3_02Controller', [
            'y'=>$y,
            'cantidad'=>$cantidad,
            'cero'=>$cero,
            'menores'=>$menores,
            'mayores'=>$mayores,
            'numero'=>$numero
        ]);
    }

    public function caja($billetes, $monedas, $totalBilletes, $totalMonedas, $r, $c, $resultado, $dineroTotal){
        return view('c3_03Controller', [
            'billetes'=>$billetes,
            'monedas'=>$monedas,
            'totalBilletes'=>$totalBilletes,
            'totalMonedas'=>$totalMonedas,
            'r'=>$r,
            'c'=>$c,
            'resultado'=>$resultado,
            'dineroTotal'=>$dineroTotal
        ]);
    }

    public function alumnos($alumnos, $calificacion, $aprobados, $reprobados, $a){
        return view('c3_04Controller', [
            'alumnos'=>$alumnos,
            'calificacion'=>$calificacion,
            'aprobados'=>$aprobados,
            'reprobados'=>$reprobados,
            'a'=>$a
        ]);
    }

    public function tabla($numeroK){
        return view('c3_05Controller', [
            'numeroK' => $numeroK
        ]);
    }
}
