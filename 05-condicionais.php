<?php

/*Condicionais: se, então, senão, fim-se*/

/*Protótipo de Chatbot*/

echo "\n*** CHATBOT ***";

echo "Opções dispiníveis:\n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n"; 

echo "\n";

$opcao = readline ("Digite uma opção: ");

/*Condicional Encadeada*/

if($opcao == 1){
    $resposta = "\nQual sua dúvida?";
} elseif ($opcao == 2) {
    $resposta = "\nPuxa, que pena... O que houve?";
} elseif ($opcao == 3) {
    $resposta = "\nBacana! Pode falar";
} elseif ($opcao == 4) {
    $resposta = "\nOk, um momento...";
} else {
    $resposta = "\nNão entendi... Vou chamar um atendente.";
}

echo $resposta;