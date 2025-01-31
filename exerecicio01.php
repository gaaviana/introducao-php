<?php
$curso = readline ("Nome do curso: ");
$cargaHoraria = readline ("Carga Horaria: ");

$faltasPermitidas = $cargaHoraria  * 0.25;
$faltasDias = $faltasPermitidas / 4;

echo "O curso ".$curso ." possui uma carga horária de ".$cargaHoraria ." e o limite de falta são ".$faltasPermitidas ." Horas. (".$faltasDias." Dias)";

