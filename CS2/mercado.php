<?php

require_once 'Utilitarias.php';
require_once 'Rifles.php';

// Criação de instâncias das classes
$utilitarias = new Utilitarias();
$rifles = new Rifles();

// Adição de itens e armas ao inventário
$utilitarias->addMolotov(2);
$utilitarias->addFlash(3);
$utilitarias->addHe(1);
$rifles->addAK47(1);

// Exibição do inventário
echo "Inventário:\n";
echo "Molotov: " . $utilitarias->getMolotov() . "\n";
echo "Flash: " . $utilitarias->getFlash() . "\n";
echo "HE: " . $utilitarias->getHe() . "\n";
echo "Decoil: " . $utilitarias->getDecoil() . "\n";
echo "Kit: " . $utilitarias->getKit() . "\n";
echo "Zeus: " . $utilitarias->getZeus() . "\n";
echo "AK-47: " . $rifles->getAK47() . "\n";

?>
