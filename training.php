<?php 
/* 
$a = 3;
$b = 3;
$c = 3;
var_dump($a == $b);
var_dump($a != $b);
var_dump ($a > $b);
var_dump ($a >= $b);
var_dump($a === $c);
var_dump($a !== $c);
 */

/* for ($i = 1; $i < 10; $i++) {
  echo $i;
  echo "\n"; // alt + ¥
} */
/* 
$total = 0;
echo $total;
//=> 0 と表示される
echo "\n";

// $iが0から始まり、$iが100以下の間、繰り返し処理を行う
for ($i = 0; $i <= 100; $i++) {
  //$total = $total + $i;
  $total += $i;
}
echo $total;
echo "\n"; */
/* 
#配列の全ての要素を出力
$fruits = array("apple", "orange","lemon");
echo count($fruits);
echo "\n";

for($i=0; $i < count($fruits); $i++){
  //echo "要素は $fruits[$i] です";
  echo "要素は" . $fruits[$i] . "です";
  echo "\n";
}
 */
/* 
 $animals = array("dog","cat","panda");

 foreach ($animals as $animal){
  echo "要素は".$animal."です。";
  echo "\n";
 }
  */


//課題（１）
$name = "Satoshi";
if($name == "Satoshi"){
  echo "私は".$name."です";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";

//課題（２）
$counter = 0;
for($i = 1; $i <= 10000; $i++){
  $counter += $i;
}
echo $counter;
echo "\n";

//課題（３）
$fruits = array("Apple","Orange","banana","Peach","Strawberry");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}


//課題（４）
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}