<?php

$check = true;
$nilai = 100;

if ($nilai === "100") {
  echo "LULUS";
}else{
  echo "TIDAK LULUS";
}

echo "<br/>";

switch ($check) {
  case true:
    echo "TRUE";
    break;
  default:
    echo "FALSE";
    break;
}

echo "<br/>";

$checkData = $check ? "TRUE" : "FALSE";
echo $checkData;
