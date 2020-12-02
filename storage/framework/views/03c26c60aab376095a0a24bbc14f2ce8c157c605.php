
<?php $__env->startSection('mititle', 'Mi Plantilla'); ?>
<?php $__env->startSection('miheader'); ?>
<center><h2>Ejercicios</h2></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('minavbar'); ?>
<ul>
<h2><li>Secuencial</li></h2>
<h2><li>Decisiones</li></h2>
<h2><li><mark>Ciclos</mark></li></ul></h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('micontenido'); ?> 
<h1>Obtener la tabla de multiplicar de un entero K comenzando desde el 1</h1>
<?php 
    $t = 1;
?>
<?php while($t <= 10): ?>
<h2><?php echo e($numeroK); ?> x <?php echo e($t); ?> = (<?php echo e($numeroK * $t); ?>)</h2>
<?php 
    $t++;
?>
<?php endwhile; ?>
<a href="<?php echo e(action('Ejercicios@index')); ?>"><h2>Plantilla</h2></a>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=300></center>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mifooter'); ?>
     <h2>Fernando Gonzalez Gallegos</h2> ##parent-placeholder-9a31309a4d927d1ad70ac526ffd8ccfde3421c85##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mimaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/c3_05Controller.blade.php ENDPATH**/ ?>