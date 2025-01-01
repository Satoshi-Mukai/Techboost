<?php
/* function sum($max){
  $result = 0;

  for($i=1; $i <= $max; $i++ ){
    $result += $i;
  }
  return $result;
}

echo sum(100);
 */
/* 
 $string = "aaaaaaaaa";
 echo strlen($string);
 */

 /* $string = "I Love Ruby!";

 $new_string = str_replace("Ruby" , "PHP", $string);
 echo $new_string;
  */

/*   $fruits = array("a","b","v");
  arsort($fruits);
  print_r($fruits);
 */


//課題（１）
function times2($num){
  $result1 = $num * 2 ;
  return $result1;
}
echo times2(30);
echo "\n";


//課題（２）
function sum($a,$b){
  $result2 = $a + $b;
  return $result2;
}
echo sum(24,4);
echo "\n";


//課題（３）

//数値が入った配列（これは、固定ではないと仮定）
//とすると、配列に含まれている要素数を数えて？？、要素をすべて乗算する;
//

$test = array(1,3,5,7,9);

function multi($arr){
  $result3 = array_product($arr);
  return $result3;
}
echo multi($test);
echo "\n";


//課題（４）

$test2= array(100,20,4,7);

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];

  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}

echo max_array($test2);
echo "\n";


//課題（５）ビルトイン関数の用途、使い方を調べて実際に使ってみてください

//1.strip_tags = 文字列から HTML および PHP タグを取り除く
$string_5_1 = "私の名前は<strong>Satoshi</strong>といいます。<?php ?>";
echo strip_tags($string_5_1);
echo "\n";


//2.array_push — 一つ以上の要素を配列の最後に追加する
$sports = array('baseball','soccer','volleyball');
array_push($sports, 'tennis','rugby');
var_dump($sports);
echo "\n";


//3.array_merge — ひとつまたは複数の配列をマージする
$sports2 = array('baseball','soccer','volleyball');
$favorite = array('TV Game','Movie','Music');
$hobby = array_merge($sports2,$favorite);
var_dump($hobby);
echo "\n";


//4.time, time — 現在の Unix タイムスタンプを返す
//  mktime — 日付を Unix のタイムスタンプとして取得する
$currentTime = time();
echo date('Y-m-d', $currentTime);
echo "\n";

$pastTime = mktime(0,0,0,3,0,2000);
echo date('Y-m-d', $pastTime);
echo "\n";


//5.date — Unixタイムスタンプを書式化する
$today = date("Y-m-d");
echo $today;
echo "\n";



