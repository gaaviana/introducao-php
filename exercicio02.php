<?php

echo "\n*** CHATBOT ***";

echo "Opções dispiníveis:\n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n"; 

echo "\n";

$opcao = readline ("Digite uma opção: ");

/*Escolha/caso*/

switch($opcao){
	case 1: $resposta = "\nQual sua dúvida?";
		break;
	case 2: $resposta = "\nPuxa, que pena... O que houve?";
		break;
	case 3: $resposta = "\nBacana! Pode falar";
		break;
	case 4: $resposta = "\nOk, um momento...";
		break;
	default :$resposta = "\nNão entendi... Vou chamar um atendente.";
}

echo $resposta;
echo "\n\n";