<?php
class Carro {
    public $modelo;
    public $ano;
    public $quilometragem;
    public $velocidade;

    // Método construtor
    public function __construct($modelo, $ano, $quilometragem, $velocidade = 0) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
        $this->velocidade = $velocidade;
    }

    // Método para fazer o carro andar
    public function andar($distancia) {
        // Simulação de andar: incrementa a quilometragem
        $this->quilometragem += $distancia;
        echo "O carro andou " . $distancia . " km.<br>";
        echo "Nova quilometragem: " . $this->quilometragem . " km.<br>";
    }

    public function exibirModelo() {
        echo "O modelo do veículo é: " . $this->modelo . "<br>";
    }

    public function multa() {
        if ($this->velocidade >= 80) {
            echo "Tomou multa, papito<br>";
        } else {
            echo "Tá safe<br>";
        }
    }
}

// Criando um objeto carro
$meuCarro = new Carro("Toyota Corolla", 2020, 10000);
$meuCarro2 = new Carro("Batmóvel", 1992, 100000);

// Fazendo o carro andar
$meuCarro->andar(50); // Andar 50 km
$meuCarro2->andar(100); // Andar 100 km

// Exibindo o modelo do segundo carro
$meuCarro2->exibirModelo();

// Verificando multa
$meuCarro2->velocidade = 90;
$meuCarro2->multa();
?>
