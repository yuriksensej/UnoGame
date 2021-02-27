<?php
$url = 'txt\text1.txt';
$fp = fopen($url, 'r');
var_dump($fp);
fclose($fp);
file_get_contents($url);
