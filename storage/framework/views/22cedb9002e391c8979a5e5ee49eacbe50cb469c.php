
<?php $__env->startSection('title', 'Mi primera página con Blade'); ?>
<?php $__env->startSection('header_p02'); ?>
##parent-placeholder-919a4343e1105c8458b07e1e2466f105e66d28b8##
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
<h1><?php echo e($title); ?></h1>
<?php $t = 1;
?>
<?php while($t <= 10): ?>
    <h2><?php echo e($numero_k); ?> x <?php echo e($t); ?> = (<?php echo e($numero_k * $t); ?>)</h2>
    <?php $t++;
    ?>
    <?php endwhile; ?>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=350></center>
</article>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
  <a href="#">Inicio</a>
  <a href="#">Novedades</a>
  <a href="#">Los mas vistos</a>
  <a href="#">Configuración</a>
  <a href="#">Acerca de</a>
  <img src="/images/galaxya50.jpg" alt="Galaxy A50" width= 190>
  <img src="/images/computadora.png" alt="Computadora" width= 190>
  <img src="/images/audifonos.jpg" alt="Audifonos" width= 190>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_p02'); ?>
     <center><h3>Copyright Fernando Gonzalez Gallegos 5°F</h3></center> ##parent-placeholder-3e484540a8e6844e63afbd599a1d6e747107f895##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_p02', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/c3_05.blade.php ENDPATH**/ ?>