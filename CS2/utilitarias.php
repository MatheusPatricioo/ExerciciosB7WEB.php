<?php

class Utilitarias {
    private int $molotov = 0;
    private int $flash = 0;
    private int $he = 0;
    private int $decoil = 0;
    private int $kit = 0;
    private int $zeus = 0;

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

    public function addDecoil(int $qnt) {
        $this->decoil += $qnt;
    }

    public function getDecoil(): int {
        return $this->decoil;
    }

    public function setDecoil(int $decoil): void {
        $this->decoil = $decoil;
    }

    public function addKit(int $qnt) {
        $this->kit += $qnt;
    }

    public function getKit(): int {
        return $this->kit;
    }

    public function setKit(int $kit): void {
        $this->kit = $kit;
    }

    public function addZeus(int $qnt) {
        $this->zeus += $qnt;
    }

    public function getZeus(): int {
        return $this->zeus;
    }

    public function setZeus(int $zeus): void {
        $this->zeus = $zeus;
    }
}

?>
