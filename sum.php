<?php
//関数を実行する
echo sum()."\n";
echo add(2,3)."\n" ;
// 1〜10 までを足した値を返す関数
function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result += $i*2;
    }

    // $result を結果として返す
    return $result;
}



function add($a, $b){

    $result = $a + $b;

    return $result;

}

function arrFn($arr) {
	$result = 1;
	for ($i = 0; $i < count($arr); $i++) {
		$result *= $arr[$i];
	}

	return $result;
} 
echo arrFn(array(1, 3, 5, 7, 9)) . "\n";


function max_array($arr){
$max_number = $arr[0];
  foreach($arr as $a){
  	if ($max_number <= $a) {
  		$max_number = $a;
  	}
  }

  return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . "\n";