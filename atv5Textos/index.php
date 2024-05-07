<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nMatheus Patricio";
file_put_contents('texto.txt', $texto);