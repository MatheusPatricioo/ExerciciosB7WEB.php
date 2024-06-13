<?php
// Exibir erros PHP na tela para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário e converte para inteiros
    $valor1 = (int)$_POST["valor1"];
    $valor2 = (int)$_POST["valor2"];
    $valor3 = (int)$_POST["valor3"];
    $valor4 = (int)$_POST["valor4"];
    $valor5 = (int)$_POST["valor5"];
    
    // Calcula a soma dos valores
    $soma = $valor1 + $valor2 + $valor3 + $valor4 + $valor5;
    
    // Calcula a média dos valores
    $media = $soma / 5;
    
    // Encontra o maior valor
    $maior = max($valor1, $valor2, $valor3, $valor4, $valor5);
    
    // Encontra o menor valor
    $menor = min($valor1, $valor2, $valor3, $valor4, $valor5);
    
    // Exibe os resultados
    echo "A soma dos valores é: " . $soma . "<br>";
    echo "A média dos valores é: " . $media . "<br>";
    echo "O maior valor é: " . $maior . "<br>";
    echo "O menor valor é: " . $menor . "<br>";
}
?>
