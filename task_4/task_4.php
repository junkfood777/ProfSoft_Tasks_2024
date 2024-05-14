<?php
function binarySearch($sortedArray, $target)
{
    $left = 0;
    $right = count($sortedArray) - 1;

    while ($left <= $right)
    {
        $mid = $left + floor(($right - $left) / 2);

        if ($sortedArray[$mid] == $target)
        {
            return $mid;
        }
        elseif ($sortedArray[$mid] < $target)
        {
            $left = $mid + 1;
        } else
        {
            $right = $mid - 1;
        }
    }

    return -1;
}

$inputFileName = "input.txt";
$outputFileName = "output.txt";

$inputData = file_get_contents($inputFileName);

$numbers = array_map('intval', explode(' ', $inputData));

$searchElement = end($numbers);

array_pop($numbers);

$resultIndex = binarySearch($numbers, $searchElement);
echo "Индекс элемента считаем от 0";
file_put_contents($outputFileName, $resultIndex);


