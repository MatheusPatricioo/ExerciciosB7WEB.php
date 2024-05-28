<?php
require_once 'Utilitarias.php';
require_once 'Rifles.php';

// Criação de instâncias das classes
$utilitarias = new Utilitarias();
$rifles = new Rifles();

// Definindo orçamento inicial
$orcamento = isset($_POST['orcamento']) ? (int)$_POST['orcamento'] : 10000;

// Definindo os preços dos itens
$precos = [
    // Rifles
    'ak47' => 2700,
    'm4a1s' => 3100,
    'awp' => 4750,
    'galil' => 2000,
    'famas' => 2250,
    'scout' => 1700,
    // Utilitárias
    'molotov' => 400,
    'flash' => 200,
    'he' => 300,
    'smoke' => 300,
    'decoy' => 50, // Adicionando o preço do item "decoy"
    'incendiary' => 600, // Adicionando o preço do item "incendiary"
    'vest' => 650, // Adicionando o preço do item "vest"
    'helmet' => 350, // Adicionando o preço do item "helmet"
];

$totalGasto = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Calcula o custo total
    foreach ($precos as $item => $preco) {
        if (isset($_POST[$item])) {
            $quantidade = (int)$_POST[$item];
            $totalGasto += $quantidade * $preco;
        }
    }

    if ($totalGasto <= $orcamento) {
        // Adiciona os itens ao inventário
        $utilitarias->addMolotov((int)$_POST['molotov']);
        $utilitarias->addFlash((int)$_POST['flash']);
        $utilitarias->addHe((int)$_POST['he']);
        if (isset($_POST['smoke'])) { // Verifica se o item "smoke" foi enviado no formulário
            $utilitarias->addSmoke((int)$_POST['smoke']); // Adicionando o item "smoke"
        }
        if (isset($_POST['decoy'])) { // Verifica se o item "decoy" foi enviado no formulário
            $utilitarias->addDecoy((int)$_POST['decoy']); // Adicionando o item "decoy"
        }
        if (isset($_POST['incendiary'])) { // Verifica se o item "incendiary" foi enviado no formulário
            $utilitarias->addIncendiary((int)$_POST['incendiary']); // Adicionando o item "incendiary"
        }
        if (isset($_POST['vest'])) { // Verifica se o item "vest" foi enviado no formulário
            $utilitarias->addVest((int)$_POST['vest']); // Adicionando o item "vest"
        }
        if (isset($_POST['helmet'])) { // Verifica se o item "helmet" foi enviado no formulário
            $utilitarias->addHelmet((int)$_POST['helmet']); // Adicionando o item "helmet"
        }
        $rifles->addAK47((int)$_POST['ak47']);
        $rifles->addM4A1S((int)$_POST['m4a1s']);
        $rifles->addAWP((int)$_POST['awp']);
        $rifles->addGalil((int)$_POST['galil']);
        $rifles->addFamas((int)$_POST['famas']);
        $rifles->addScout((int)$_POST['scout']);

        // Atualiza o orçamento após a compra
        $orcamento -= $totalGasto;
    } else {
        echo "<script>alert('Orçamento excedido!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado CS:GO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Mercado CS:GO</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main container">
        <h2>Orçamento: $<?php echo $orcamento; ?></h2>
        <form method="post" action="">
            <label for="orcamento">Informe o orçamento inicial:</label>
            <input type="number" id="orcamento" name="orcamento" value="<?php echo $orcamento; ?>" min="0"><br><br>
            <div class="clearfix">
                <?php foreach ($precos as $item => $preco): ?>
                    <div class="item">
                        <h3><?php echo ucfirst($item); ?></h3>
                        <img src="images/<?php echo $item; ?>.png" alt="<?php echo $item; ?>">
                        <p>Preço: $<?php echo $preco; ?></p>
                        <input type="number" name="<?php echo $item; ?>" value="0" min="0">
                    </div>
                <?php endforeach; ?>
            </div>
            <input type="submit" value="Comprar">
        </form>

        <h2>Inventário Atual</h2>
        <ul>
            <h3>Rifles</h3>
            <li>AK-47: <?php echo $rifles->getAK47
(); ?></li>
<li>M4A1-S: <?php echo $rifles->getM4A1S(); ?></li>
<li>AWP: <?php echo $rifles->getAWP(); ?></li>
<li>Galil: <?php echo $rifles->getGalil(); ?></li>
<li>Famas: <?php echo $rifles->getFamas(); ?></li>
<li>Scout: <?php echo $rifles->getScout(); ?></li>
</ul>
<ul>
<h3>Utilitárias</h3>
<li>Molotov: <?php echo $utilitarias->getMolotov(); ?></li>
<li>Flash: <?php echo $utilitarias->getFlash(); ?></li>
<li>HE: <?php echo $utilitarias->getHe(); ?></li>
<li>Smoke: <?php echo $utilitarias->getSmoke(); ?></li>
<li>Decoy: <?php echo $utilitarias->getDecoy(); ?></li> <!-- Adicionando o item "decoy" -->
<li>Incendiary: <?php echo $utilitarias->getIncendiary(); ?></li> <!-- Adicionando o item "incendiary" -->
<li>Vest: <?php echo $utilitarias->getVest(); ?></li> <!-- Adicionando o item "vest" -->
<li>Helmet: <?php echo $utilitarias->getHelmet(); ?></li> <!-- Adicionando o item "helmet" -->
</ul>

<div class="total">
Total Gasto: $<?php echo $totalGasto; ?><br>
<?php if ($totalGasto > $orcamento): ?>
    <span style="color: red;">Você excedeu o orçamento!</span>
<?php endif; ?>
</div>
</section>

<footer>
<p>Mercado CS:GO - Desenvolvido por [Seu Nome]</p>
</footer>
</body>
</html>
