<?php

require_once 'Soal.php';

$mtk = new Matematika;
$mtk->set_penjumlahan(21,3);
$mtk->set_pengurangan(21,3);
$mtk->set_perkalian(21,3);
$mtk->set_pembagian(21,3);
echo "Perhitungan Bilangan 21 dan 3";
echo "<br>";
echo "Penjumlahan :".$mtk->get_penjumlahan();
echo "<br>";
echo "Pengurangan :".$mtk->get_pengurangan();
echo "<br>";
echo "Perkalian :".$mtk->get_perkalian();
echo "<br>";
echo "Pembagian :".$mtk->get_pembagian();
?>