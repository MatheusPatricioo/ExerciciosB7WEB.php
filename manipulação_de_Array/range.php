<?php
//Em PHP, a função range() cria um array contendo uma sequência de elementos. 
$array = range(1,12);

foreach ($array as $value) {
    echo "". $value ."<br/>";
};