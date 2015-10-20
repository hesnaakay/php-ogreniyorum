<meta charset="utf-8" />
<?php



// php'de çıktı echo ve print metotları kullanılarak alınır

echo "Merhaba Dünya!" ; // => Merhaba Dünya!

//echo içerisinde çıktısı alınacak olan string çift tırnak içerisinde yazılabildiği gibi tek tırnak içerisinde de yazılabilir.

// echo 'Merhaba Dünya!';

echo "<br>"; // => browser da imlecin yazılan satırın bir alt satırına geçmesini sağlar.

//echo metodu ile değişkenlerde kullanılabilir

$a="Merhaba Dünya!";

echo $a; // => Merhaba Dünya!

echo "<br>";

//echo içerisinde bir den fazla çıktısı alınacak olan ifadeler . ile birleştirilir.

$ilk = "php";
$ikinci = "html";
$sonuncu = "CSS";

echo $ilk ." ". $ikinci . "5 " .$sonuncu. "3" ."<br>"; // =>php html5 CSS3


/* Bir string içerisinde başka bir değişken ile string kullanılacağı zaman
 *ya her ikisinin de çift tırnak ya da tamamını kapsayanın çift içerideki stringin tek tırnak olması gerekir
 * Kapsayan stringin tek tırnak içersinde olması çift tırnak içerisinde bulunan değişkenin özelliğini kaybedip
 * normal bir string gibi davranmasına sebep olur.
*/
$bu= "o";

echo "$bu da neymiş". "<br>"; // => o da neymiş

echo '$bu da neymiş' . "<br>";  // => $bu da neymiş

/* \n ve <br> arasındaki fark
 * \n sayfanın kaynak kodu üzerinde imleci bir aşağı satıra taşırken
 * <br> browser üzerinde kullanılan yerde imleci bir aşağı satıra alır
*/

echo "Bu satır da\n kullanılan slash n ifadesi\n browserda bir aşağı satıra atmaz.";

// print kullanımı
print "<br>" . "print'te echo gibi içerisine yazılanı ekrana basar.";

// () print ve echo için tercihe bağlı olarak kullanılabilir.