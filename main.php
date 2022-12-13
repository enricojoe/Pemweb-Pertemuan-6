<?php
  function KonversiRomawi($integer) {
   $hasil = '';
   
   $romawi = array('M' => 1000,
     'CM' => 900,
     'D' => 500,
     'CD' => 400,
     'C' => 100,
     'XC' => 90,
     'L' => 50,
     'XL' => 40,
     'X' => 10,
     'IX' => 9,
     'V' => 5,
     'IV' => 4,
     'I' => 1
    );
   
   foreach($romawi as $roma => $nilai){
    $matches = intval($integer/$nilai);
    $hasil .= str_repeat($roma,$matches);
   
    $integer = $integer % $nilai;
   }
   
   return $hasil;
  }

$nilai = intval(99);
echo KonversiRomawi($nilai);

?>