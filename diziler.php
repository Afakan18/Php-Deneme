<?php 

$dizi=array("ahmet","mehmet","ali","veli");

echo $dizi[0];echo "<br>";

print_r($dizi);echo "<br>";




$sayilar=array(1,2,3,4,5,6,7,8,9);
$harfler=array("a","b","c","d");

echo "\$sayilar dizisinde bulunan eleman sayısı :".count($sayilar);echo "<br>";

print_r($sayilar);
echo "<br>";

rsort($sayilar);
print_r($sayilar);
echo "<br>";

echo max($sayilar);echo "<br>";
echo min($sayilar);echo "<br>";


echo in_array(2, $sayilar); //2 sayısı var ise 1 yazar ekrana. if döngülerinde özellikle kullanılır
echo "<br>";

print_r($harfler);echo "<br>";

echo implode("+", $sayilar);
echo "<br>";
echo implode($harfler, "sayilar");


 ?>