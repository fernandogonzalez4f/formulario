Saludos alumnos del CBTis 122
<br>
blade imprime los valores { { } }
{{date('Y')}}
<?php
/*Declaraación de variables*/
/*$nombreVariable = valor*/
    $variable = 58;
    $edad = 35;
?>
la etiqueta de php es
<?php /*Abrimos la etiqueta de php*/

/*Aqui va el codigo de PHP*/

/*Cerramos la etiqueta de PHP*/?>
<br>
{{$variable}}
<br>
{{$edad}}
<?php
    $edad = "Mi edad es de 34 años";
    /*Para sumar (concatenar) es con .*/
    $variable = $variable.$edad;
    $edad = 17; 
?>
{{$edad}}<br>
{{$variable}}<br>
    @if($edad >= 18)
        Puedes votar
    @else
        No puedes votar
    @endif
<?php
$x = 0;
?>
@while ($x <=10)
    {{$x}}<br>
    <?php
        $x = $x+1;
        ?>
@endwhile