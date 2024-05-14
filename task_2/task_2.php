<?php

function customSortArray(array $A, array $B) {
    $occurrences = [];
    $remaining = [];
    foreach ($A as $num) {
        if (!isset($occurrences[$num])) {
            $occurrences[$num] = 0;
        }
        $occurrences[$num]++;
    }

    $sortedA = [];
    foreach ($B as $num) {
        if (isset($occurrences[$num])) {
            for ($i = 0; $i < $occurrences[$num]; $i++) {
                $sortedA[] = $num;
            }
            unset($occurrences[$num]);
        }
    }

    foreach ($occurrences as $num => $count) {
        for ($i = 0; $i < $count; $i++) {
            $remaining[] = $num;
        }
    }

    rsort($remaining);

    $sortedA = array_merge($sortedA, $remaining);

    return $sortedA;
}
$inputFile = 'input.txt';
$outputFile = 'output.txt';


$inputData = file_get_contents($inputFile);

$data = json_decode($inputData, true);

$A = $data['A'];
$B = $data['B'];
$sortedA = customSortArray($A, $B);

$outputHandle = fopen($outputFile, 'w');

if ($outputHandle === false) {
    die("Не удалось открыть файл $outputFile для записи.");
}

fwrite($outputHandle, json_encode($sortedA) . PHP_EOL);

fclose($outputHandle);

?>
