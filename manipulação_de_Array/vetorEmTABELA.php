<?php
$array = [
    'nome' => 'Patricio', 'idade' => 27, 'empresa' => 'Edutec', 'cor' => 'verde', 'profissao' => 'comedor de casada'
];
?>

<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
0