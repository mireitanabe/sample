<?php
// kadai1
function sum($max){
  $result = $max * 2;
  return $result;
}

$aaa = sum(5);

echo $aaa . "\n";

// kadai2
function f($a, $b){
  $result = 0;
  $result = $a + $b;
  return $result;
}
 
echo f(5,2) . "\n";

// kadai3 
$ary = array(1,3,5,7,9);

function byArr($arr){
 $result = 1;
 foreach ($arr as $value){
    $result = $result * $value;
  }
  echo $result;
}

byArr($ary);
echo "\n";

// kadai4
function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
   
 }
 return $max_number;
 }
 
// kadai5
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');
echo "\n";

$stack = array("mikan,ponkan");
array_push($stack,"dekopon","iyokan");
print_r($stack);

$array1 = array("color" => "mizuiro", 2, 4);
$array2 = array("a","b","color" => "mkimidori", "shape" => "trapezoid" , 4);
$result = array_merge($array1, $array2);
print_r($result);

$nextWeek = time() + (7 * 24 * 60 * 60);

echo 'Now:    '.date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

date_default_timezone_set('Asia/Tokyo');