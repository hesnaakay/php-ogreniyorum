<?php


//değişkenler $ işareti ile belirtilir.
// _ işareti, harf ya da sayı ile başlayabilir.
//büyük küçük harf duyarlılığı vardır.

$yil = 2015;
$ay = "Ekim";
$gün = 21;

//integer
$degisken = 18; // => integer veri tipi

echo gettype($degisken); // değişken tipini bu fonsiyon ile görebiliriz.
echo "<br>";
$degisken2 = -123;

$degisken3 = 024; // => sekizlik tabanda bir sayı

$degisken4 = 0x2C; // => onaltılık tabanda bir sayı

//double

$double= 3.14567313456;
echo gettype($double);
echo "<br>";

$double2 = 3.1;
echo gettype($double2);
echo "<br>";

$double3 = 1.2e3;
echo gettype($double3);
echo "<br>";

//boolean
//true ya da false değerlerini alır.

$boolean1 = true;
echo gettype($boolean1);
echo "<br>";
$boolean2 = false;

// string

$string = "deneme";
echo gettype($string);
echo "<br>";
$string2 = "234";
echo gettype($string2);
echo "<br>";

// tip dönüşümü

$yeni_degisken = (int) $double2;

echo gettype($yeni_degisken);
echo "<br>";
$en_yeni_degisken = (string) $yeni_degisken;

echo gettype($en_yeni_degisken);
echo "<br>";

// aritmatik işlemler

echo $degisken ." + ". $degisken2 . " = " . ($degisken + $degisken2);
//echo "<br>";
echo $degisken ." - ". $degisken2 . " = " . ($degisken - $degisken2);

echo $degisken ." * ". $degisken2 . " = " . ($degisken * $degisken2);

echo $degisken ." / ". $degisken2 . " = " . ($degisken / $degisken2);
echo "<br>";

// kısa aritmatik işlemler

$sayi = 5;

$sayi += 1; // => $sayi = $sayi +1; (6)

echo $sayi++; //(6)

echo ++$sayi; //(8)
