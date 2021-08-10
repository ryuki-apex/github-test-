<?php

$i = 0;
while ($i < 100) {
    //15->'fizzbuzz' 5->'buzz' 3->'fizz'
    // もし$iが3で割り切れた場合'fizz'と表示してください 
   (++$i);
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo ("fizzbuzz");
    } else if ($i % 3 === 0) {
        echo ("fizz");
    } else if ($i % 5 === 0) {
        echo ("buzz");
    } else { 
        echo ($i);
    }
    
   

   print "\n";

}
?>