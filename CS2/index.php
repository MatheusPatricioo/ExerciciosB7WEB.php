<?php
require_once 'Utilitarias.php';
require_once 'Rifles.php';

// Criação de instâncias das classes
$utilitarias = new Utilitarias();
$rifles = new Rifles();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar os dados do formulário
    $utilitarias->addMolotov((int)$_POST['molotov']);
    $utilitarias->addFlash((int)$_POST['flash']);
    $utilitarias->addHe((int)$_POST['he']);
    $utilitarias->addDecoil((int)$_POST['decoil']);
    $utilitarias->addKit((int)$_POST['kit']);
    $utilitarias->addZeus((int)$_POST['zeus']);
    $rifles->addAK47((int)$_POST['ak47']);
    $rifles->addM4A1S((int)$_POST['m4a1s']);
    $rifles->addEagle((int)$_POST['eagle']);
    $rifles->addGalil((int)$_POST['galil']);
    $rifles->addFamas((int)$_POST['famas']);
    $rifles->addScout((int)$_POST['scout']);
    $rifles->addAWP((int)$_POST['awp']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #333; }
        form { margin-bottom: 20px; }
        input[type="number"] { width: 60px; }
        input[type="submit"] { margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Adicionar Itens ao Inventário</h1>
    <form method="post" action="">
        <h2>Utilitárias</h2>
        Molotov: <input type="number" name="molotov" value="0" min="0"><br>
        Flash: <input type="number" name="flash" value="0" min="0"><br>
        HE: <input type="number" name="he" value="0" min="0"><br>
        Decoil: <input type="number" name="decoil" value="0" min="0"><br>
        Kit: <input type="number" name="kit" value="0" min="0"><br>
        Zeus: <input type="number" name="zeus" value="0" min="0"><br>

        <h2>Rifles</h2>
        AK-47: <input type="number" name="ak47" value="0" min="0"><br>
        M4A1-S: <input type="number" name="m4a1s" value="0" min="0"><br>
        Desert Eagle: <input type="number" name="eagle" value="0" min="0"><br>
        Galil: <input type="number" name="galil" value="0" min="0"><br>
        Famas: <input type="number" name="famas" value="0" min="0"><br>
        Scout: <input type="number" name="scout" value="0" min="0"><br>
        AWP: <input type="number" name="awp" value="0" min="0"><br>

        <input type="submit" value="Adicionar ao Inventário">
    </form>

    <h2>Inventário Atual</h2>
    <ul>
        <li>Molotov: <?php echo $utilitarias->getMolotov(); ?></li>
        <li>Flash: <?php echo $utilitarias->getFlash(); ?></li>
        <li>HE: <?php echo $utilitarias->getHe(); ?></li>
        <li>Decoil: <?php echo $utilitarias->getDecoil(); ?></li>
        <li>Kit: <?php echo $utilitarias->getKit(); ?></li>
        <li>Zeus: <?php echo $utilitarias->getZeus(); ?></li>
        <li>AK-47: <?php echo $rifles->getAK47(); ?></li>
        <li>M4A1-S: <?php echo $rifles->getM4A1S(); ?></li>
        <li>Desert Eagle: <?php echo $rifles->getEagle(); ?></li>
        <li>Galil: <?php echo $rifles->getGalil(); ?></li>
        <li>Famas: <?php echo $rifles->getFamas(); ?></li>
        <li>Scout: <?php echo $rifles->getScout(); ?></li>
        <li>AWP: <?php echo $rifles->getAWP(); ?></li>
    </ul>
</body>
</html>
