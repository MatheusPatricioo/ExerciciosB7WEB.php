<?php
session_start();
//filter_input: quando ele puxa a variavel(por ex, $nome) e nao acha, ele deixa como false
//filter_input:se ele achar, poe como true.

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);// Obtém o valor da variável 'nome' enviada via POST



if($nome){ // Verifica se tanto 'nome' quanto 'senha' têm valores definidos
    header('Location: index2.php');
    echo 'NOME: '. $nome."<br/>"; // Se ambos têm valores, imprime o valor de 'nome'
    
} else {
    $_SESSION['aviso'] = 'Por favor! Preencha os itens corretamente! seu lixo';
    header('Location: index.php'); //serve para redirecionar a pag, nesse caso, qnd a pessoa erra os dados, eu retorno pro index.php
                                //sempre chamar o header location antes de enviar qualquer outra inf, nesse caso por ex, tava dentro do
                                //if. Se redirecionar tendo enviado outrs inf antes, pode da problema.
                                
    exit; // colocamos dps do header location por segurança; 
}
