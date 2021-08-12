<?php
error_reporting(0);
echo ("1－100の中から数字を当ててください。");
//標準入力を出す。
$s=rand (1,100);
//ランダムに1－100で数字を生成する。
while($num!==$s){
$num =trim(fgets(STDIN));
//1－100以外を無効にする
if ($num>=101 || $num<=0){
    echo("無効な入力です");
     break;
}
 //判定。
 //もし$numと$sが等しければ正解と表示
if($num==$s){
    echo("正解です");
     break;
//$numより$sが小さければ小さいと表示
}else if ($num>$s){ // $num > 50
    echo ("もっと小さい"); 
 //$numより$sが大きければ大きいと表示
}else if ($num<$s){ // $num < 50
    echo ("もっと大きい");
 //$numが$s等しくもなく小さくも大きくもなければ無効
}else { // $num = 50
    echo ("無効な入力です。");
}
    echo ("\n");
}
 ///TODO: 2. echo; 3. if; 4. only 1 ~ 100 -> run if ~~~;
?>