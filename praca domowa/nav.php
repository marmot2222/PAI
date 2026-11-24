<?php
$current = basename($_SERVER['PHP_SELF']);

$items = [
    "index.php" => "Start",
    "utworz.php" => "Utwórz bazę",
    "dodaj.php" => "Dodaj",
    "lista.php" => "Lista",
    "usun.php" => "Usuń",
    "edytuj.php" => "Edytuj",
];
?>
<nav style="margin-bottom: 16px;">
    <?php foreach ($items as $file => $label): ?>
        <a
            href="<?= htmlspecialchars($file) ?>"
            style="margin-right: 10px; padding: 10px;"
            class="<?= $current === $file ? 'active' : '' ?>"
            <?= $current === $file ? 'style="background:#2d6cdf; color:white;"' : '' ?>
        >
            <?= htmlspecialchars($label) ?>
        </a>
    <?php endforeach; ?>
</nav>
<style>
.active { font-weight: bold; }
</style>
