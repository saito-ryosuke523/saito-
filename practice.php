<?php
//変数　$a に３を代入
$a = 3;
//変数　$b に７を代入
$b = 7;
echo $a+$b;
echo "\n";
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

$hello = "Hello";
$name = "saitoryosuke";
$world = "'s World";
echo $hello.$name.$world;

$value = "tech";
$resolt="_boost";
echo $value.$resolt;

  $calendar2018= [
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
echo $calendar2018["December"];
echo "\n";
$name = "齊藤亮祐";
if ($name ="齊藤亮祐") {
  echo "私は齊藤亮祐です。";
} else {
  echo"齊藤亮祐ではありません。";
}echo "\n";
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple","banana","orange","lemon","grape");

echo count($fruits);

foreach($fruits as $fruits){
  echo "要素は". $fruits;
  echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i < $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0) {
    echo $i . "\n";
  }
}