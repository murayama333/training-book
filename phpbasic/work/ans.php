<?php

for ($i=1; $i <= 40; $i++) { 
    $fileName = "no$i.php.txt";
    $lines = file("no$i.php.md");
    echo $fileName . PHP_EOL;
    $answer = false;
    $read = false;
    $code = "";
    for ($j = 0; $j < count($lines); $j++) { 
        $line = $lines[$j];
        #echo $line . PHP_EOL;
        if (mb_strpos($line, "## 実行結果") !== false) {
            $answer = true;
            continue;
        }
        if ($answer === true && strpos($line, "```php") === false && strpos($line, "```") !== false ) {
            $read = true;
            $answer = false;
            continue;
        }
        if ($read === true && strpos($line, "```php") === false && strpos($line, "```") !== false ) {
            echo ">> " . $fileName . PHP_EOL;
            file_put_contents($fileName, $code);
            break;
        }
        if ($read === true) {
            $code .= $line;
        }
        
    }
}