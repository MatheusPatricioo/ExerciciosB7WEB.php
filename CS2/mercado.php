<?php

// Inclua a definição da classe Utilitarias
require_once 'Utilitarias.php';
require_once 'Rifles.php';

// Crie um objeto Utilitarias
$utilitarias = new Utilitarias();

// Adicione alguns itens
$utilitarias->addMolotov(2);
$utilitarias->addFlash(3);
$utilitarias->addHe(1);

// Adicione algumas armas
$rifles->addAK47(1);

// Exiba o inventário
echo "Inventário:\n";
echo "Molotov: " . $utilitarias->getMolotov() . "\n";
echo "Flash: " . $utilitarias->getFlash() . "\n";
echo "HE: " . $utilitarias->getHe() . "\n";
echo "Decoil: " . $utilitarias->getDecoil() . "\n";
echo "Kit: " . $utilitarias->getKit() . "\n";
echo "Zeus: " . $utilitarias->getZeus() . "\n";
echo "ak47: " . $rifles->getAK47() . "\n";

?>
