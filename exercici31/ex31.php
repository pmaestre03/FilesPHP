<?php
$file = fopen('contactes31.txt','r');
$fileCopy = fopen('contactes31b.txt','w');
echo "<ol>";
while(! feof($file)) {
    $line = fgets($file);
    $separacion = explode(",",$line);
    echo $separacion[0]." ".$separacion[1]." ".$separacion[2]." ".$separacion[3]."<br>";
    fwrite($fileCopy,$separacion[0]);
    fwrite($fileCopy," #".$separacion[1]);
    fwrite($fileCopy," #".$separacion[2]);
    fwrite($fileCopy," #".$separacion[3]);
}
  echo "</ol>";
fclose($file);
?>