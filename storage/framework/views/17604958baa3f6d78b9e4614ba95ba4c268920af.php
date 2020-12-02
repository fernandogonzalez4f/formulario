<h1>Determinar N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero.</h1>
<?php
/* Cuantas son cero, menores a cero y mayores a cero */
    $y = 1;
    $cantidad = 10;
    $cero = 0;
    $menores = 0;
    $mayores = 0;
    $numero = 5;

?>
<?php for($y = 1; $y <= $cantidad; $y++): ?>
     <?php if($numero == 0): ?>
     <?php echo e($cero++); ?>

     <?php elseif($numero < 0): ?>
     <?php echo e($menores++); ?>

     <?php else: ?>
     <?php echo e($mayores++); ?>

     <?php endif; ?>
     <?php endfor; ?>
     <h3>Total de ceros: <?php echo e($cero); ?></h3>
     <h3>Total de menores a cero: <?php echo e($menores); ?></h3>
     <h3>Total de mayores a cero: <?php echo e($mayores); ?></h3>
     
     <?php /**PATH C:\laragon\www\fGonzalezFernandoAlien\resources\views/Ex3_02.blade.php ENDPATH**/ ?>