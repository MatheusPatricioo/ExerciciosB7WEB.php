<?php

class Oficina {
    public $pao;
    public $leite;
    public $manteiga;

    public function __construct($pao = 0, $leite = 0, $manteiga = 0) {
        $this->pao = $pao;
        $this->leite = $leite;
        $this->manteiga = $manteiga;
    }

    public function compra($pao = 0, $leite = 0, $manteiga = 0) {
        if ($pao == 0 && $leite == 0 && $manteiga == 0) {
            echo "Oq precisa hoje?\n";
        } else {
            if ($pao == 0) {
                echo "Gostaria de quantos Kg de pão? " . $pao . "\n";
            }
            if ($leite == 0) {
                echo "Gostaria de quantos L de leite? " . $leite . "\n";
            }
            if ($manteiga == 0) {
                echo "Vai levar uma manteiga? " . $manteiga . "\n";
            }
        }
    }
}

?>
