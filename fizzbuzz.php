<?php

$i=0;
while ($i < 100) {
    // もし$iが3で割り切れた場合'fizz'と表示してください 
  (++$i);

    if ($i % 3===0){
    // $i % 3 == 0;
       echo("fizz");
     
    
    }else { echo($i);
    // $i % 3 != 0;
 
    }
   

   print "\n";

}
?>