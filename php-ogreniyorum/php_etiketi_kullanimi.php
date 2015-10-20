<?php


// php kodları <?php etiketi içerisinde bulunur.

//kodların bulunduğu dosya içerisinde sadece php kodları varsa etiketi kapatmak zorunlu değildir.

//Aşağıda olduğu gibi sayfada php kodları dışında kod blokları varsa php etiketinin kapatılması gerekir.

?>

<html>

<body>

<p class="strong">Buraya bir şeyler yazalım.</p>
<? echo "1. kullanım"; // html kodları içerisinde kısa kullanımıdır. ?>
<p class="strong">Buraya bir şeyler yazalım.</p>
<?= $deger = 1;//2. kullanım    ?>
<p class="strong">Buraya bir şeyler yazalım.</p>
<?php
if ($deger)
    echo "3. kullanım"; //html donları içerisinde normal kullanımıdır.
?>
</body>

</html>
