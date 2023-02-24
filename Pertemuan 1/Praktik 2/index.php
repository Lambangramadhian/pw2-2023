<?php

/*
Variable system
Variable built in php (variabel yang sudah ada di PHP)
*/

echo $_SERVER ["DOCUMENT_ROOT"];
echo "<br>";
echo "<br>";

/*
Variable user
Variabel yang dibuat user
*/

$name = 'Lambang';
$age = 19;
$weight = 45;

$name = 'Rahmat';

echo "Nama saya adalah ".$name;
echo "<br>";
echo "<br>";

/*
Variable constant
Variabel yang tidak bisa diubah nilainya
*/

define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	define ("SITE_NAME", "AIS"); // ---> error

  // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>";

?>