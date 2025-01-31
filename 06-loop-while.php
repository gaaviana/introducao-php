<?php

/*Loop while (ENQUANTO)*/

//Exemplo 1: contagem de 1 até 10

/* $i = 1;

while ($i <= 10) {
	echo $i++. "\n";
} */

// Exemplo 2: obter/exibir nome e idade de 3 pessoas

$i = 1;

while ($i <= 3) {
	
	echo "\n";
	$nome = readline ("Digite o ".$i. "° nome: \n");
	$idade = readline ("Digite a idade: \n");
	
	echo "Dados: " .$nome. ", " .$idade. " Anos.\n"; 
	
	$i++;
}
