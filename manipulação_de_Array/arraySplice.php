<?php

// Função para demonstrar o uso de array_splice
/*
Claro! array_splice em PHP é uma função que pode ser usada para remover ou substituir 
elementos de um array e retornar os elementos removidos. Aqui está um exemplo de como usar a função array_splice
com comentários explicativos:
*/
function exemplo_array_splice(&$array, $inicio, $quantidade = null, $substitutos = array()) {
    // $array: O array no qual queremos fazer a operação
    // $inicio: Índice do array onde queremos iniciar a remoção ou substituição
    // $quantidade (opcional): Número de elementos a serem removidos. Se não especificado, removerá todos os elementos a partir do índice de início.
    // $substitutos (opcional): Array de elementos a serem inseridos no lugar dos elementos removidos.

    // Executa a função array_splice
    $resultado = array_splice($array, $inicio, $quantidade, $substitutos);

    // Retorna os elementos removidos
    return $resultado;
}

// Array de exemplo
$array_exemplo = array('a', 'b', 'c', 'd', 'e');

// Remove o elemento 'c' do array
$resultado1 = exemplo_array_splice($array_exemplo, 2, 1);
print_r($resultado1);
// Saída: Array ( [0] => c )

// Agora $array_exemplo é array('a', 'b', 'd', 'e')

// Substitui o elemento 'b' pelo elemento 'x'
$resultado2 = exemplo_array_splice($array_exemplo, 1, 1, array('x'));
print_r($resultado2);
// Saída: Array ( [0] => b )

// Agora $array_exemplo é array('a', 'x', 'd', 'e')

// Remove os dois últimos elementos do array
$resultado3 = exemplo_array_splice($array_exemplo, -2);
print_r($resultado3);
// Saída: Array ( [0] => d [1] => e )

// Agora $array_exemplo é array('a', 'x')
