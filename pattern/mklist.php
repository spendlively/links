<?php
$pattern = "https://habrahabr.ru/hub/system_programming/page%d/";
$fileName = "list.txt";

for($i = 1; $i <= 40; $i++){

    file_put_contents($fileName, sprintf($pattern, $i) . "\n", FILE_APPEND);
}


