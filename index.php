<?php
declare (strict_types=1)

function fizzbuzz(int $i):string
{
    $result ='';
    if ($i % 3 === 0){
        $result .='Fizz';
    }

    if ($i % 5 === 0){
        $result .='Buzz';
    }

    if (($i % 3 !== 0)&&($i % 5 !== 0)) {
        $result .=(string)$i;
    }

    for ($i = 1; $i <= 100; $i++){
        echo fizzbuzz($i),PHP_EOL;
    }


}

?>
