<?php

require_once 'Penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(2,9);
echo "Penjumlahan dari bilangan 2 dan 9 adalah :".$penjumlahan->get_penjumlahan();

?>