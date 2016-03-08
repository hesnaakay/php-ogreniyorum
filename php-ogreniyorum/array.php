<meta charset="utf-8" />
<?php

//basit bir dizi oluşturalım.

$arr = array(1,2,3,4,5);

print_r($arr);
 //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )



// dizi içerisinde anahtar=>değer şeklinde birden çok elemanı bulunabilir.
// anahtarlar integer veya string türünde olabilir.
//değerlerin türü iin bir sınırlama yoktur.

print "<br/>";

$array = array(
    "ad" => "hesna",
    "soyad" => "akay",
    "yas" => 21,
    1 => true,
);
print_r($array);

//Array ( [ad] => hesna [soyad] => akay [yas] => 21 [1] => 1 )

print "<br/>";
echo $array["soyad"];


$array1 = array(
    0 => array(
        "ad" => "hesna",
        "soyad" => "akay",
        "yas" => 21,
        1 => true,),
    1 => array(
        "ad" => "ahmet",
        "soyad" => "tan",
        "yas" => 27,
        1 => false,
    ),false
);


echo $array1[1]["ad"]; //ahmet

$array2 = array(
    "sebzeler" => array(
        "fasulye",
        "karnıbahar",
        "lahana"
        ),
    "sayilar" =>array(
        1,
        2,
        3,
    ),
    "hayvanlar" => array(
        "fil",
        "bukalemun",
        "köpek"
    ),
);

print "<br/>";

$dizi = array("elma", "armut", "cilek");

$dizi[] = "karpuz"; //$arr[3] = karpuz ile aynı işi yapar.

unset($dizi[2]);  // dizinin o elemanını siler

unset($dizi); //diziyi tamamen siler.