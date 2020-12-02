
<?php $__env->startSection('mititle', 'Mi Plantilla'); ?>
<?php $__env->startSection('miheader'); ?>
    ##parent-placeholder-9a822152a119cea71604e8fe8b575ffe3dfbed06##
<marquee>Plantilla de prueba</marquee>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('minavbar'); ?>
<ul>
<li>Link 1</li>
<li>Link 2</li>
<li>Link 3</li></ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('micontenido'); ?> 
    'Mi primera plantilla'<br>
    <?php echo e($dato); ?>

    <center><img src="/images/Sticker Mario.png"></center>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mifooter'); ?>
     Fernando Gonzalez Gallegos ##parent-placeholder-9a31309a4d927d1ad70ac526ffd8ccfde3421c85##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mimaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/miplantilla.blade.php ENDPATH**/ ?>