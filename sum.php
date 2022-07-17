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

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
  }

  return $max_number;
}
      
