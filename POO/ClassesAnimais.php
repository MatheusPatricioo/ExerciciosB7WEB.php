<?php
// Classe base
class Animal {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function fazerBarulho(string $barulho) {
        echo $barulho;
    }
}

// Classe derivada (herda de Animal)
class Cachorro extends Animal {
    public function fazerBarulho() {
        parent::fazerBarulho("AU AU");
    }
}

// Classe derivada (herda de Animal) 
class Gato extends Animal {
}

// Criando objetos das classes derivadas
$cachorro = new Cachorro("Rex", 3);
$gato = new Gato("Whiskers", 2);

// Chamando o método fazerBarulho() de cada objeto
echo $cachorro->nome . " faz: ";
$cachorro->fazerBarulho();
echo "<br>";

echo $gato->nome . " faz: ";
$gato->fazerBarulho("MIA");


?>
