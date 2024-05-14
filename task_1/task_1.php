<?php
function sortIntArray(array $numbers)
{
    sort($numbers);
    return $numbers;
}
$inputFile = 'input.txt';
$outputFile = 'output.txt';



$inputData = file_get_contents($inputFile);
$numbers = array_map('intval', explode(' ', $inputData));

$sortedNumbers = sortIntArray($numbers);

$outputHandle = fopen($outputFile, 'w');

if ($outputHandle === false) {
    die("Не удалось открыть файл $outputFile для записи.");
}

fwrite($outputHandle, implode(' ', $sortedNumbers) . PHP_EOL);

fclose($outputHandle);


?>
