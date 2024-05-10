<?php
//array_keys: pega apenas as chaves do array e transforma em outro array;
//array_value: pega apenas os VALORES do array e transforma em outro array;
$array = [
    'nome' => 'Patricio', 'idade' => 27, 'empresa' => 'Edutec', 'cor' => 'verde', 'profissao' => 'comedor de casada'
];

if(key_exists('carro', $array)){
$array = $array['nome'];
echo "Primeiro nome: " . $array;
} else {
    echo "Não tem a chave no Array";
}