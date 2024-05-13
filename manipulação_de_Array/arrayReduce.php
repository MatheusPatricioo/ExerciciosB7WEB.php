<?php

function calcularProduto($array) {
    $produto = array_reduce($array, function($acumulador, $valorAtual) {
        $acumulador *= $valorAtual; // Multiplica o acumulador pelo valor atual
        return $acumulador;
    }, 1); // O valor inicial do acumulador é 1 para não alterar o produto

    return $produto;
}

$numeros = [1, 2, 3, 4, 5];
echo "O produto dos números é: " . calcularProduto($numeros);



/*
Explicação do array_reduce:
Quando Usar:
Use array_reduce quando precisar reduzir um array a um único valor.
É útil para operações como soma, produto, média, concatenação, entre outras.
Por Que Usar:
Simplifica o código ao evitar loops explícitos.
É mais legível e conciso.
Como Usar:
array_reduce recebe três argumentos:

O array a ser reduzido.
Uma função de callback que é aplicada a cada elemento do array.
Um valor inicial para o acumulador (opcional).
A função de callback recebe dois argumentos: o acumulador e o valor atual do elemento.

Ela deve retornar o valor atualizado do acumulador.

No final, array_reduce retorna o valor final do acumulador.

No exemplo, usamos array_reduce para multiplicar todos os elementos do array e 
calcular seu produto. O valor inicial do acumulador é 1 para garantir que a multiplicação funcione corretamente.
*/