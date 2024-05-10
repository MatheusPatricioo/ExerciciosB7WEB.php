<?php
/*/ Gerar um array contendo letras do alfabeto usando a função range()
$letras = range('a', 'z');

// Dado do formulário de cadastro de usuários
$dado = "examp";

// Separar o dado em duas partes: primeira letra e as 4 últimas letras ordenadas aleatoriamente
$primeira_letra = $dado[0];
$ultimas_letras = str_split(substr($dado, 1));
shuffle($ultimas_letras);

// Combinar a primeira letra com as 4 últimas letras ordenadas aleatoriamente
$nome_completo = $primeira_letra . implode("", $ultimas_letras);

// Exibir o nome completo gerado
echo "Nome completo: $nome_completo\n";

// Verificar se cada caractere do dado está no array de letras do alfabeto
foreach (str_split($nome_completo) as $caractere) {
    if (!in_array($caractere, $letras)) {
        echo "O caractere '$caractere' não é uma letra do alfabeto.\n";
    }
}
*/
$numeros = range(25, 18, 3);

foreach ($numeros as $numero) {
    echo $numero . " ";
}

