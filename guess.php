<?php
echo("数字を当ててください。");
//　空白を取り除く。
$i =trim(fgets(STDIN)); 

//1-100なら表示,それ以上なら無効と表示
 if ($i <= 100 && $i >= 1){
    echo ($i); 
}
else{
    echo ("無効な入力です");
}


?>