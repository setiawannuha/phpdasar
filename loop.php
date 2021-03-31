<?php

$arr1 = ["merah", "kuning", "hijau"];

for ($i=0; $i < count($arr1); $i++) { 
  echo $arr1[$i]." ";
}

echo "<hr/>";

$arr2 = [
  "nama" => "bambang",
  "alamat" => "jaksel",
  "no_telp" => "08123"
];

foreach ($arr2 as $value) {
  echo $value;
  echo "<br/>";
}

// $array1 = [
//   "fruits" => [
//     "apple",
//     "manggo",
//     "pineapple"
//   ],
//   "hobbies" => [
//     "football",
//     "swiming",
//     "basketball"
//   ]
// ];

