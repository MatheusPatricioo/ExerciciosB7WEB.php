<?php
class Carro {
    public $modelo;
    public $ano;
    public $quilometragem;

    // Método construtor
    public function __construct($modelo, $ano, $quilometragem) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
    }

    // Método para fazer o carro andar
    public function andar($distancia) {
        // Simulação de andar: incrementa a quilometragem
        $this->quilometragem += $distancia;
        echo "O carro andou " . $distancia . " km.<br>";
        echo "Nova quilometragem: " . $this->quilometragem . " km.<br>";
    }
}

// Criando um objeto carro
$meuCarro = new Carro("Toyota Corolla", 2020, 10000);

// Fazendo o carro andar
$meuCarro->andar(50); // Andar 50 km
