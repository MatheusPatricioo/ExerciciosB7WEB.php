<?php
class Utilitarias {
    private int $molotov = 0;
    private int $flash = 0;
    private int $he = 0;
    private int $smoke = 0;
    private int $decoy = 0;
    private int $incendiary = 0;
    private int $vest = 0;
    private int $helmet = 0;

    public function addMolotov(int $qnt) {
        $this->molotov += $qnt;
    }

    public function getMolotov(): int {
        return $this->molotov;
    }

    public function setMolotov(int $molotov): void {
        $this->molotov = $molotov;
    }

    public function addFlash(int $qnt) {
        $this->flash += $qnt;
    }

    public function getFlash(): int {
        return $this->flash;
    }

    public function setFlash(int $flash): void {
        $this->flash = $flash;
    }

    public function addHe(int $qnt) {
        $this->he += $qnt;
    }

    public function getHe(): int {
        return $this->he;
    }

    public function setHe(int $he): void {
        $this->he = $he;
    }

    public function addSmoke(int $qnt) {
        $this->smoke += $qnt;
    }

    public function getSmoke(): int {
        return $this->smoke;
    }

    public function setSmoke(int $smoke): void {
        $this->smoke = $smoke;
    }

    public function addDecoy(int $qnt) {
        $this->decoy += $qnt;
    }

    public function getDecoy(): int {
        return $this->decoy;
    }

    public function setDecoy(int $decoy): void {
        $this->decoy = $decoy;
    }

    public function addIncendiary(int $qnt) {
        $this->incendiary += $qnt;
    }

    public function getIncendiary(): int {
        return $this->incendiary;
    }

    public function setIncendiary(int $incendiary): void {
        $this->incendiary = $incendiary;
    }

    public function addVest(int $qnt) {
        $this->vest += $qnt;
    }

    public function getVest(): int {
        return $this->vest;
    }

    public function setVest(int $vest): void {
        $this->vest = $vest;
    }

    public function addHelmet(int $qnt) {
        $this->helmet += $qnt;
    }

    public function getHelmet(): int {
        return $this->helmet;
    }

    public function setHelmet(int $helmet): void {
        $this->helmet = $helmet;
    }
}

?>
