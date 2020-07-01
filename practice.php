<?php
$a = 3;
$b = 7;
echo $a + $b;

echo "\n";

$array_month = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
echo $array_month[7];

echo "\n";

$hello = "Hellow";
$name = "Mirei";
$world = "'s World!";
echo $hello . $name . $world;

echo "\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

echo "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];

echo "\n";

$drink = ["orang","coke"];

echo $drink[1] . "\n" . PHP_EOL;

$a = 100; 
$b = 200;
$c = $a + $b;

echo $c . "\n" ;

if($name .= "mirei") {
  echo "私はmireiです" . "\n" ;
} else {
  echo "mireiではありません";
}
$name .= "mirei";

$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total . "\n" ;

$fruits = array("orang","cherry","peach","pear","fig");

foreach($fruits as $fruits){
echo  "要素は" . $fruits;
echo "\n";
}


$start = 1;
$end = 100;

for ($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i . "\n";
 }
}