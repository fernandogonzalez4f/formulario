<h1>Leer las calificaciones de N alumnos y determinar el número de aprobados y reprobados.</h1>
<?php
/* Cuantos son aprobados y cuantos son reprobados */
    
    $alumnos = 10;
    $aprobados = 0;
    $reprobados = 0;
    $calificaciones = 20;
    $a = 1;
?>
    <?php for($a = 1; $a <= $alumnos; $a++): ?>
    <?php if($calificaciones >= 6 && $calificaciones <= 10): ?>
    <h3><?php echo e($aprobados++); ?></h3>
    <?php elseif($calificaciones < 6): ?>
    <h3><?php echo e($reprobados++); ?></h3>
    <?php else: ?>
    <h3>Solo se permiten calificaciones del 0 al 10</h3>
    <?php endif; ?>
    <?php endfor; ?>
    <h3>Total de aprobados: <?php echo e($aprobados); ?></h3>
    <h3>Total de reprobados: <?php echo e($reprobados); ?></h3>

    <?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/Ex3_04.blade.php ENDPATH**/ ?>