<?php

// Função para demonstrar o uso de array_slice
function exemplo_array_slice($array, $inicio, $tamanho = null, $preservar_chaves = false) {
    // $array: O array de onde queremos extrair os elementos
    // $inicio: Índice do array a partir do qual queremos extrair os elementos
    // $tamanho (opcional): Número de elementos a serem extraídos. Se não especificado, extrairá até o final do array.
    // $preservar_chaves (opcional): Se true, as chaves originais do array serão preservadas. Por padrão, é false e as chaves serão reindexadas numericamente.

    // Executa a função array_slice
    $resultado = array_slice($array, $inicio, $tamanho, $preservar_chaves);

    // Retorna o array resultante
    return $resultado;
}

// Array de exemplo
$array_exemplo = array('a', 'b', 'c', 'd', 'e');

// Extrai os elementos do índice 1 até o final
$resultado1 = exemplo_array_slice($array_exemplo, 1);
print_r($resultado1);
// Saída: Array ( [0] => b [1] => c [2] => d [3] => e )

// Extrai os 3 primeiros elementos
$resultado2 = exemplo_array_slice($array_exemplo, 0, 3);
print_r($resultado2);
// Saída: Array ( [0] => a [1] => b [2] => c )

// Extrai os elementos do índice 1 até o final, preservando as chaves originais
$resultado3 = exemplo_array_slice($array_exemplo, 1, null, true);
print_r($resultado3);
// Saída: Array ( [1] => b [2] => c [3] => d [4] => e )
