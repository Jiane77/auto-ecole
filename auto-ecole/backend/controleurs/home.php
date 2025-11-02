<?php

require_once __DIR__ . '/../modeles/modele.class.php';
$modele = new Modele();
$formules = $modele->selectAll_formule();

require_once __DIR__ . '/../vue/home.php';
?>
