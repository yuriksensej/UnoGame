<?php
foreach ($_REQUEST as $key => $value) {
   echo $key . ':' . $value . '<br>';
}
$data = $_REQUEST['date'];
print_r($data);
if ($_FILES) {
   include 'txt/text.txt';
   echo '<br>';
}
foreach ($_FILES as $key => $value) {
   echo $key . ':' . $value . '<br>';
   foreach ($value as $key1 => $value1) {
      echo $key1 . ':' . $value1 . '<br>';
   }
   // print_r($value);
}
