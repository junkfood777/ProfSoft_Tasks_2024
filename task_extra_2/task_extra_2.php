<?php
function countWordOccurrences($filename) {

    $inputData = file_get_contents($filename);

    $inputData = strtolower($inputData);

    preg_match_all('/\b\w+\b/', $inputData, $matches);

    $wordList = $matches[0];

    $wordCount = array_count_values($wordList);

    arsort($wordCount);

    return $wordCount;
}

$inputFile = 'input.txt';
$outputFile = 'output.txt';

$wordFrequency = countWordOccurrences($inputFile);

$output = "";
foreach ($wordFrequency as $word => $count) {
    $output .= "{$word}: {$count}" . PHP_EOL;
}


file_put_contents($outputFile, $output);

