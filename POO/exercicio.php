<?php
class movimento {
    public $correr;
    public $voar;

    public function __construct($correr=0, $voar=0) {
        $this->correr = $correr;
        $this->voar = $voar;
    }

    public function seMovimentar() {
        // Incrementa a propriedade $correr em 1
        $this->correr++;
        return true; // Retorna true para indicar que a movimentação foi realizada com sucesso
    }
}

// Criando um objeto da classe movimento
$cavalo = new movimento(10);
$cachorro = new movimento(5);

// Chamando o método seMovimentar() e verificando se a movimentação foi bem-sucedida
if ($cavalo->seMovimentar()) {
    echo "pocotó pocotó pocotó: " . $cavalo->correr. "<br>";
}
if ($cachorro->seMovimentar()) {
    echo "au au au au: " . $cachorro->correr. "<br>";
}
?>
