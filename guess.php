<?php

echo ("1－100の中から数字を当ててください。");
//標準入力を出す。
$s = rand (1,100);
$num =trim(fgets(STDIN));
//ランダムに1－100で数字を生成する。

 
//空白を取り除く。標準入力を出す。
 while($num!==$s){
//正解と表示もしくは間違っていれば大きいか小さいか表示。
if ($num>$s){
 echo ("もっと小さい");
 echo ($num =trim(fgets(STDIN)));
}else if ($num<$s){
 echo ("もっと大きい");
 echo ($num=trim(fgets(STDIN)));
}else {
 echo ("無効な入力です");
 echo ($num=trim(fgets(STDIN)));
 }
 echo ("正解です！");
 echo ("\n");
 }

?>
