<?php
$lines = file("ex2.md", FILE_IGNORE_NEW_LINES);
$fineName = null;
$fileContents = null;
for ($i = 0; $i < count($lines); $i++) { 
    $line = $lines[$i];
    if (strpos($line, "# No") !== false) {
        if ($i !== 0) {
           file_put_contents($fileName, $fileContents);
        }
        $no = explode("No.", $line)[1];
        $fileName = "no$no.php.md";
        echo $fileName . PHP_EOL;
        $fileContents = "# no$no.php" . PHP_EOL;
    } else {
        $fileContents .= $line . PHP_EOL;
    }
}
file_put_contents($fileName, $fileContents);
