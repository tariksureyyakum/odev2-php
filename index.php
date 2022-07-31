<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function DiziOdev ($array, $value) {
  $filteredarray = array_filter($array);
  $randomizedarray = array_rand($filteredarray , $value);
  $result = array_map(function ($dizi) use ($filteredarray) {
    return $filteredarray[$dizi];
  }, $randomizedarray);
  return $result;
}
  echo "<pre>";
print_r(DiziOdev($planets, 2));
print_r(DiziOdev($planets, 3));
print_r(DiziOdev($planets, 2));
print_r(DiziOdev($planets, 4));
print_r(DiziOdev($planets, 5));

?>