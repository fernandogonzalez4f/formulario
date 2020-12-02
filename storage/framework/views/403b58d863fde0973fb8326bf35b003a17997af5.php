
<?php $__env->startSection('mititle', 'Mi Plantilla'); ?>
<?php $__env->startSection('miheader'); ?>
<center><h2>Ejercicios</h2></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('minavbar'); ?>
<ul>
<h2><li>Secuencial</li></h2>
<h2><li><mark>Decisiones</mark></li></h2>
<h2><li>Ciclos</li></ul></h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('micontenido'); ?> 
<h1>Determinar si una persona puede votar con base en su edad en las próximas elecciones</h1>
<?php
    $edadrequerida = 18 - $edad;
?>
<?php if($edad >= 18): ?>
    <h2><?php echo e($nombre); ?>. Puedes votar</h2>
<?php else: ?>
    <h2><?php echo e($nombre); ?>. No puedes votar. Debes esperar hasta los <?php echo e($edadrequerida); ?> años</h2>
<?php endif; ?>
<a href="<?php echo e(action('Ejercicios@index')); ?>"><h2>Plantilla</h2></a>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=300></center>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mifooter'); ?>
     <h2>Fernando Gonzalez Gallegos</h2> ##parent-placeholder-9a31309a4d927d1ad70ac526ffd8ccfde3421c85##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mimaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/d2_01Controller.blade.php ENDPATH**/ ?>