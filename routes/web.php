<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alien',function(){
    return view('alien');
});

Route::get('/suma2numeros',function(){
    return view('suma');
});

Route::get('/resta',function(){
    return view('resta');
});

/* Rutas para ejercicios */

Route::get('/areatrapecio',function(){
    return view('ex1_01');
});

Route::get('/volumencono',function(){
    return view('ex1_03');
});

Route::get('/areatriangulo',function(){
    return view('ex1_04');
});

Route::get('/edadvotacion',function(){
    return view('ex2_01');
});

Route::get('/regalo',function(){
    return view('ex2_03');
});

Route::get('/calificaciones',function(){
    return view('ex2_05');
});

Route::get('/ceromenormayor',function(){
    return view('ex3_02');
});

Route::get('/alumnoscalif',function(){
    return view('ex3_04');
});

Route::get('/tablanumero',function(){
    return view('ex3_05');
});

/* Rutas para plantillas */

Route::get('/plantilla', function(){
    return view ('plantilla', ['dato' => 'Es un dato']);
});

Route::get('/miplantilla', function(){
    return view ('miplantilla', ['dato' => 'Bienvenido']);
});

/* Rutas para el ejercicio de plantillas */

Route::get('/plantilla_p02', function(){
    return view ('plantilla_p02', ['datos' => 'Proximamente']);
});

/* Ejemplos de rutas */

Route::get('suma2', function(){
    $x = 15;
    $y = 20;
    $suma = $x + $y;
    return view('suma2', ['x' => $x, 'y' => $y, 'd' => $suma]);
});

Route::get('resta2', function(){
    $x = 15;
    $y = 20;
    $resta = $x - $y;
    return view('resta2')
    ->with('x',$x)
    ->with('y',$y)
    ->with('d',$resta)
    ->with('title','La resta de dos numeros');
});

Route::get('multi/{x}/{y}', function ($x, $y){
    $multi = $x * $y;
    return view('multi', array('x' => $x, 'y' => $y, 'd' => $multi, 'title' => 'La multiplicacion de dos numero'));
});

Route::get('multi2/{x}/{y?}', function ($x, $y = 7){
    $multi = $x * $y;
    return view('multi2', array('x' => $x, 'y' => $y, 'd' => $multi, 'title' => 'La multiplicacion de dos numero'));
})->where(['x'=>'[0-9]+','y'=>'[0-9]+']);

/* Rutas para los ejercicios */
/* Secuenciales */

Route::get('trapecio/{baseMayor?}/{baseMenor?}/{altura?}', function ($baseMayor = 9, $baseMenor = 4, $altura = 6){
    $area = ($baseMayor + $baseMenor) * $altura / 2;
    return view('s1_01', array('baseMayor' => $baseMayor, 'baseMenor' => $baseMenor, 'altura' => $altura, 'area' => $area, 'title' => 'Calcular el área de un trapecio'));
});

Route::get('apotemacuadrado/{lado?}/{apotema?}', function ($lado = 6, $apotema = 0){
    $apotema = $lado / 2;
    return view('s1_02', array('lado' => $lado, 'apotema' => $apotema, 'title' => 'Calcular el apotema de un cuadrado'));
});

Route::get('cono/{radio?}/{altura?}', function ($radio = 6, $altura = 12){
    $volumen = M_PI * ($radio * $radio) * $altura / 3;
    return view('s1_03', array('radio' => $radio, 'altura' => $altura, 'volumen' => $volumen, 'title' => 'Calcular el volumen de un cono'));
});

Route::get('triangulo/{base?}/{altura?}', function ($base = 15, $altura = 8){
    $area = $base * $altura / 2;
    return view('s1_04', array('base' => $base, 'altura' => $altura, 'area' => $area, 'title' => 'Calcular el área de un triángulo'));
});

Route::get('longitudCircunferencia/{radio?}/{longitud?}', function ($radio = 3.5, $longitud = 0){
    $longitud = 2 * M_PI * $radio;
    return view('s1_05', array('radio' => $radio, 'longitud' => $longitud, 'title' => 'Calcular la longitud de una circunferencia de radio r'));
});

/* Condicionales (Decisiones) */
Route::get('edad', function(){
    $nombre = "Eduardo";
    $edad = 22;
    $edadrequerida = 18 - $edad;
    return view('d2_01')
    ->with('nombre',$nombre)
    ->with('edad',$edad)
    ->with('edadrequerida',$edadrequerida)
    ->with('title','Determinar si una persona puede votar con base en su edad en las próximas elecciones');
});

Route::get('sueldoHorasextras', function(){
    $horasT = 40;
    $sueldoHora = 6;
    $sueldo = 0;
    $extras = 0;

    $sueldo = $horasT * $sueldoHora;
    
    $extras = (($horasT - 40) * $horasT * 2) + 40 * $horasT;
    return view('d2_02')
    ->with('horasT',$horasT)
    ->with('sueldoHora',$sueldoHora)
    ->with('sueldo',$sueldo)
    ->with('extras',$extras)
    ->with('title','Determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora');
});

Route::get('regaloSanvalentin', function(){
    $cantidad = 300.00;
    return view('d2_03')
    ->with('cantidad',$cantidad)
    ->with('title','Determinar que se regalo se va a comprar para el 14 de Febrero');
});

Route::get('costoEstacionamiento', function(){
    $horas = 9;

    $cobroTot1 = $horas * 5;
    $cobroTot2 = ($horas - 2) * 4 + 10;
    $cobroTot3 = ($horas - 5) * 3 + 22;
    $cobroTot4 = ($horas - 10) * 2 + 37;
    return view('d2_04')
    ->with('horas',$horas)
    ->with('cobroTot1',$cobroTot1)
    ->with('cobroTot2',$cobroTot2)
    ->with('cobroTot3',$cobroTot3)
    ->with('cobroTot4',$cobroTot4)
    ->with('title','Determinar el costo por el uso del estacionamiento');
});

Route::get('calificacion', function(){
    $nombre = "Luis";
    $calificacion = 9;
    return view('d2_05')
    ->with('nombre',$nombre)
    ->with('calificacion',$calificacion)
    ->with('title','Determinar la calificación de que indique la letra que corresponde la calificación');
});

/* Ciclos */

Route::get('sueldoProfesor', function(){
    $salarioInicial = 1500;
    $salarioIncrement = 0;
    $a = 1;
    return view('c3_01', [
        'salarioInicial' => $salarioInicial, 'salarioIncrement' => $salarioIncrement,
        'title' => 'Salario Inicial del profesor']);
})->where(['salarioInicial' => '[0,9]+']);

Route::get('cantidades', function(){
    $y = 1;
    $cantidad = 13;
    $cero = 0;
    $menores = 0;
    $mayores = 0;
    $numero = -6;
    return view('c3_02', [
        'cantidad' => $cantidad, 'cero' => $cero, 
        'menores' => $menores, 'mayores' => $mayores,
        'numero' => $numero, 'title' => 'Determinar N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero.']);
});

Route::get('cajaRegistradora', function(){
    $billetes = 25;
    $monedas = 45;
    $totalBilletes = 62;
    $totalMonedas = 75;
    $r = 0;
    $c = 1;
    $resultado = 0;
    $dineroTotal = 0;
    $total = $totalBilletes + $totalMonedas;
    return view('c3_03', [
        'billetes' => $billetes, 'monedas' => $monedas, 
        'totalBilletes' => $totalBilletes, 'totalMonedas' => $totalMonedas,
        'r' => $r, 'c' => $c, 'resultado' => $resultado,
        'dineroTotal' => $dineroTotal, 'title' => 'Determinar el total de una caja registradora']);
});

Route::get('alumnos', function(){
    $alumnos = 10;
    $calificacion = 1;
    $aprobados = 0;
    $reprobados = 0;
    $a = 1;
    return view('c3_04', [
        'alumnos' => $alumnos, 'calificacion' => $calificacion, 
        'aprobados' => $aprobados, 'reprobados' => $reprobados,
        'title' => 'Leer las calificaciones de N alumnos y determinar el número de aprobados y reprobados.']);
});

Route::get('tabla', function(){
    $numero_k = 9;
    return view('c3_05', [
        'numero_k' => $numero_k,
        'title' => 'Leer las calificaciones de N alumnos y determinar el número de aprobados y reprobados.']);
});

/* Controladores */

Route::get('/nose/{variable}', [
    'uses' => 'Baldor@sumita',
    'as' => 'PagDemo'
]);
Route::get('/archivo', 'Baldor@index');


/* Ejercicios de Controladores */
/* Plantilla */
Route::get('/plantillaControlador', 'Ejercicios@index');

/* Secuenciales */
Route::get('trapecioController/{baseMayor}/{baseMenor}/{altura}', [
    'uses' => 'Ejercicios@trapecio',
    'as' => 'AreaTrapecio'
]);

Route::get('apotemaController/{lado}/{apotema}', [
    'uses' => 'Ejercicios@cuadrado',
    'as' => 'ApotemaCuadrado'
]);

Route::get('conoController/{radio}/{altura}', [
    'uses' => 'Ejercicios@cono',
    'as' => 'VolumenCono'
]);

Route::get('trianguloController/{base}/{altura}', [
    'uses' => 'Ejercicios@triangulo',
    'as' => 'AreaTriangulo'
]);

Route::get('circunferenciaController/{radio}/{longitud}', [
    'uses' => 'Ejercicios@circunferencia',
    'as' => 'LongitudCircunferencia'
]);

/* Decisiones */
Route::get('votacionController/{nombre}/{edad}', [
    'uses' => 'Ejercicios@edad',
    'as' => 'EdadVotacion'
]);

Route::get('sueldoController/{horasT}/{sueldoHora}/{sueldo}/{extras}', [
    'uses' => 'Ejercicios@sueldo',
    'as' => 'SueldoTrabajador'
]);

Route::get('regaloController/{cantidad}', [
    'uses' => 'Ejercicios@regalo',
    'as' => 'RegaloFebrero'
]);

Route::get('estacionamientoController/{horas}', [
    'uses' => 'Ejercicios@estacionamiento',
    'as' => 'CostoEstacionamiento'
]);

Route::get('calificacionesController/{nombre}/{calificacion}', [
    'uses' => 'Ejercicios@calificaciones',
    'as' => 'Calificaciones'
]);

/* Ciclos */
Route::get('profesorController/{salarioInicial}/{salarioIncrement}', [
    'uses' => 'Ejercicios@profesor',
    'as' => 'SalarioProfesor'
]);

Route::get('cantidadController/{y}/{cantidad}/{cero}/{menores}/{mayores}/{numero}', [
    'uses' => 'Ejercicios@cantidades',
    'as' => 'CeroMenoresMayores'
]);

Route::get('cajaController/{billetes}/{monedas}/{totalBilletes}/{totalMonedas}/{r}/{c}/{resultado}/{dineroTotal}', [
    'uses' => 'Ejercicios@caja',
    'as' => 'CajaRegistradora'
]);

Route::get('alumnosController/{alumnos}/{calificacion}/{aprobados}/{reprobados}/{a}', [
    'uses' => 'Ejercicios@alumnos',
    'as' => 'AlumnosCalificaciones'
]);

Route::get('alumnosController/{numeroK}', [
    'uses' => 'Ejercicios@tabla',
    'as' => 'TablaNumeroEntero'
]);

/*Route::get('/login','PruebaController@login');*/
Route::get('/valida','PruebaController@validarLogin');

Route::get('/validar2','PruebaController@myLogin');