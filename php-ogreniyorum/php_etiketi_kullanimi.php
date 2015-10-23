<?php


// php kodları <?php etiketi içerisinde bulunur.

//kodların bulunduğu dosya içerisinde sadece php kodları varsa etiketi kapatmak zorunlu değildir.

//Aşağıda olduğu gibi sayfada php kodları dışında kod blokları varsa php etiketinin kapatılması gerekir.

$sayi1 = 23;
$sayi2 = 18;
$deger = 12;
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Etiketi Kullanımı</title>
</head>

<body>

<p style="color:red">Buraya bir şeyler yazalım.</p>
<? echo $sayi1 ." + ". $sayi2 ." = ". ($sayi1 + $sayi2); // html kodları içerisinde <?php 'nin kısa kullanımıdır. ?>
<p style="color:red">Buraya bir şeyler yazalım.</p>
<?=$deger ?> <!-- <? echo $deger;?> bu kullanımın kısa kullanımıdır.-->

<br/>
<p style="color:red">Buraya bir şeyler yazalım.</p>
<?php
if ($deger)
    echo "<br/>". "$deger"; //html kodları içerisinde normal kullanımıdır.
?>
</body>

</html>
