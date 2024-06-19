<?php
require_once 'perfume.php';
require_once 'tipoperfume.php';
require_once 'webPerfume.php';

$perfume1 = new Perfume('212', 'Carolina Herrera', 2.5, 20, 75.90, tipoPerfume::Citrico);
$perfume2 = new Perfume('GoodGirl', 'Carolina Herrea', 3.5, 30, 65.50, tipoPerfume::Frutal);
$perfume3 = new Perfume('Interdith', 'Givenchy', 4.5, 50, 85.90, tipoPerfume::Floral);
$perfume4 = new Perfume('Angel', 'Mungler', 4.9, 35, 95.50, tipoPerfume::Frutal);

$perfumeria = new WebPerfume('Perfumería de Ejemplo');
$perfumeria->inventario = [$perfume1, $perfume2, $perfume3, $perfume4];

$perfumeria->elPerfumeMasCaro();
$perfumeria->promedioPuntuacion();
?>
