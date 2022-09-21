<?php 

$yazi="benim sitem github";


echo $yazi;

echo "<br>";
 
 echo strtolower($yazi); //küçük harfe çevirir
echo "<br>";

echo strtoupper($yazi); //büyük harfe çevirir
echo "<br>";

echo ucwords($yazi); //ilk harfleri büyültür
echo "<br>";

echo ucfirst($yazi); //metnin ilk harfi büyür
echo "<br>";

echo strlen(utf8_decode($yazi)); //değişken kaç karakter Türkçe karakter için utf8
echo "<br>";

echo strstr($yazi, sitem); //belirttiğim yerden sonra yazar
echo "<br>";

echo str_replace(sitem, test,$yazi ); //değişkendeki sitem kelimesini test ile değiştir
echo "<br>";

echo substr($yazi, 10,30); //değişkendeki 10ncu karakterden 30 karaktere kadar yaz





 ?>