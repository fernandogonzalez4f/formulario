
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
<h1>Determinar el total de una caja registradora</h1>
<?php
    $total = $totalBilletes + $totalMonedas;
?>
<?php for($c = 0; $c < $billetes; $c++): ?>
<?php
    $r2 = $r + $totalBilletes;
?>
<?php
    $r = $r2;
?>
<?php endfor; ?>
<h2>El total de los billetes es <?php echo e($r2); ?></h2>
<?php for($c = 0; $c < $monedas; $c++): ?>
<?php
    $resultado2 = $resultado + $totalMonedas;
?>
<?php
    $resultado = $resultado2;
?>
<?php endfor; ?>
<h2>El total de las monedas es <?php echo e($resultado2); ?></h2>
<?php
    $dineroTotal = $r2 + $resultado2;
?>
<h2>La cantidad total del almacén de una caja registradora es <?php echo e($dineroTotal); ?></h2>
<a href="<?php echo e(action('Ejercicios@index')); ?>"><h2>Plantilla</h2></a>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=300></center>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mifooter'); ?>
     <h2>Fernando Gonzalez Gallegos</h2> ##parent-placeholder-9a31309a4d927d1ad70ac526ffd8ccfde3421c85##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mimaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/c3_03Controller.blade.php ENDPATH**/ ?>