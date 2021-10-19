<?php
require_once 'vendor/autoload.php';

use Aritmatika\Aritmatika;

$aritmatika = new Aritmatika;

$a = 10;
$b = 5;

$jml = $aritmatika->penjumlahan($a, $b);
$krg = $aritmatika->pengurangan($a, $b);
$kali = $aritmatika->perkalian($a, $b);
$bagi = $aritmatika->pembagian($a, $b);
$hasilBagi = $aritmatika->hasilBagi($a, $b);

echo "hasil {$a} + {$b} adalah {$jml}. \n";
echo "hasil {$a} - {$b} adalah {$krg}. \n";
echo "hasil {$a} x {$b} adalah {$kali}. \n";
echo "hasil {$a} : {$b} adalah {$bagi}. \n";
echo "hasil {$a} % {$b} adalah {$hasilBagi}. \n";
