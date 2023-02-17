
<?php

for ($i=0; $i <= 100; $i++) {
    $num = $i;
    $palindrome = 0;
    while ($num > 0) {
        $rem = $num % 10;
        $palindrome = ($palindrome * 10) + $rem;
        $num = (int)($num / 10);
    }
    if ($i == $palindrome) {
        echo $i."\n"."<br>";
    }
}