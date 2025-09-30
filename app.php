<?php
// tabuada.php
// Pega o número enviado via GET (ex.: tabuada.php?numero=7)
$numero = isset($_GET['numero']) ? intval($_GET['numero']) : null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada em PHP</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form method="get" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Gerar</button>
    </form>

    <?php if ($numero !== null): ?>
        <h2>Tabuada do <?= htmlspecialchars($numero) ?></h2>
        <ul>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <li><?= $numero ?> x <?= $i ?> = <?= $numero * $i ?></li>
            <?php endfor; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
