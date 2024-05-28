<?php

class Rifles {
    private int $m4a1s = 0;
    private int $ak47 = 0;
    private int $eagle = 0;
    private int $galil = 0;
    private int $famas = 0;
    private int $scout = 0;
    private int $awp = 0;

    public function addM4A1S(int $qnt) {
        $this->m4a1s += $qnt;
    }

    public function getM4A1S(): int {
        return $this->m4a1s;
    }

    public function addAK47(int $qnt) {
        $this->ak47 += $qnt;
    }

    public function getAK47(): int {
        return $this->ak47;
    }

    public function addEagle(int $qnt) {
        $this->eagle += $qnt;
    }

    public function getEagle(): int {
        return $this->eagle;
    }

    public function addGalil(int $qnt) {
        $this->galil += $qnt;
    }

    public function getGalil(): int {
        return $this->galil;
    }

    public function addFamas(int $qnt) {
        $this->famas += $qnt;
    }

    public function getFamas(): int {
        return $this->famas;
    }

    public function addScout(int $qnt) {
        $this->scout += $qnt;
    }

    public function getScout(): int {
        return $this->scout;
    }

    public function addAWP(int $qnt) {
        $this->awp += $qnt;
    }

    public function getAWP(): int {
        return $this->awp;
    }
}

?>
