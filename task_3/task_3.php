<?php
function findMaxSumOfTwoNumbers($numbers)
{
    if (count($numbers) < 2) {
        return null;
    }

    rsort($numbers);

    return $numbers[0] + $numbers[1];
}

$inputFileName = "input.txt";
$outputFileName = "output.txt";

$inputData = file_get_contents($inputFileName);

$numbers = array_map('intval', explode(' ', $inputData));

$maxSum = findMaxSumOfTwoNumbers($numbers);

file_put_contents($outputFileName, $maxSum);

?>
