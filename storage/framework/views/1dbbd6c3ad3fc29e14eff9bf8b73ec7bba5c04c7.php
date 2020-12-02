
<?php $__env->startSection('title', 'Mi primera página con Blade'); ?>
<?php $__env->startSection('header_p02'); ?>
##parent-placeholder-919a4343e1105c8458b07e1e2466f105e66d28b8##
<marquee><h2 class="title2">Esta es una página demostrativa, proximamente habra novedades que mostrar</h2></marquee>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar_p02'); ?>
<a class="navbar-brand" href="#"><h3>Laravel</h3></a>
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#"><h3>Inicio</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Novedades</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Los más vistos</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Acerca de</h3></a>
    </li>
  </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido_p02'); ?>
<article class="background2">
  <h1>Reciente</h1>
  <article class="color">
    <h2>¿Qué es PHP?</h2>
    <p>PHP es el lenguaje de programación para el desarrollo del backend más popular. También uno de los lenguajes más usados, cómo se refleja en todos los índices globales.</p>
  </article>
  <article class="color">
    <h2>SQL</h2>
    <p>El Lenguaje de Consulta Estructurado popularmente conocido por sus siglas en inglés como SQL, es un tipo de lenguaje de programación que ayuda a solucionar problemas específicos o relacionados con la definición, manipulación e integridad de la información representada por los datos que se almacenan en las bases de datos.</p>
  </article>
  <article class="color">
    <h2>Laravel</h2>
    <p>Laravel es un framework PHP. Es uno de los frameworks más utilizados y de mayor comunidad en el mundo de Internet.</p>
  </article>
</article>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=200></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
  
  <h3>Secuenciales</h3>
  <a href="<?php echo e(route('AreaTrapecio',['baseMayor'=>9, 'baseMenor'=>4, 'altura'=>6])); ?>">AreaTrapecio</a>
  <a href="<?php echo e(route('ApotemaCuadrado',['lado'=>6, 'apotema'=>0])); ?>">Apotema</a>
  <a href="<?php echo e(route('VolumenCono',['radio'=>6, 'altura'=>12])); ?>">VolumenCono</a>
  <a href="<?php echo e(route('AreaTriangulo',['base'=>15, 'altura'=>8])); ?>">AreaTriangulo</a>
  <a href="<?php echo e(route('LongitudCircunferencia',['radio'=>3.5, 'longitud'=>0])); ?>">Longitud</a>
  
  <h3>Decisiones</h3>
  <a href="<?php echo e(route('EdadVotacion',['nombre'=>'Eduardo', 'edad'=>22])); ?>">EdadVotacion</a>
  <a href="<?php echo e(route('SueldoTrabajador',['horasT'=>40, 'sueldoHora'=>6, 'sueldo'=>0, 'extras'=>0])); ?>">Sueldo</a>
  <a href="<?php echo e(route('RegaloFebrero',['cantidad'=>300.00])); ?>">Regalo</a>
  <a href="<?php echo e(route('CostoEstacionamiento',['horas'=>9])); ?>">Estacionamiento</a>
  <a href="<?php echo e(route('Calificaciones',['nombre'=>'Luis', 'calificacion'=>9])); ?>">Calificaciones</a>
  
  <h3>Ciclos</h3>
  <a href="<?php echo e(action('Ejercicios@profesor',['salarioInicial'=>1500, 'salarioIncrement'=>0])); ?>">SalarioProfesor</a>
  <a href="<?php echo e(action('Ejercicios@cantidades',['y'=>1, 'cantidad'=>13, 'cero'=>0, 'menores'=>0, 'mayores'=>0, 'numero'=>-6])); ?>">Cantidades</a>
  <a href="<?php echo e(action('Ejercicios@caja',['billetes' => 25, 'monedas' => 45, 'totalBilletes' => 62, 'totalMonedas' => 75, 'r' => 0, 'c' => 1, 'resultado' => 0, 'dineroTotal' => 0])); ?>">Caja</a>
  <a href="<?php echo e(action('Ejercicios@alumnos',['alumnos' => 10, 'calificacion' => 1, 'aprobados' => 0, 'reprobados' => 0, 'a' => 1])); ?>">Alumnos</a>
  <a href="<?php echo e(action('Ejercicios@tabla',['numeroK' => 9,])); ?>">Tabla</a>
  <img src="/images/galaxya50.jpg" alt="Galaxy A50" width= 190>
  <img src="/images/computadora.png" alt="Computadora" width= 190>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_p02'); ?>
     <center><h3>Copyright Fernando Gonzalez Gallegos 5°F</h3></center> ##parent-placeholder-3e484540a8e6844e63afbd599a1d6e747107f895##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_p02', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/plantillaController.blade.php ENDPATH**/ ?>