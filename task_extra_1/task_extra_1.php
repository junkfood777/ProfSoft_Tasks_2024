<?php

function isCorrectBracketSequence($input) {
    $stack = [];
    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (in_array($char, ['(', '{', '['])) {
            array_push($stack, $char);
        }
        elseif (in_array($char, [')', '}', ']'])) {
            if (empty($stack) || $stack[count($stack) - 1] !== $bracketPairs[$char]) {
                return false;
            } else {
                array_pop($stack);
            }
        }
    }

    return empty($stack);
}

$inputFile = 'input.txt';
$outputFile = 'output.txt';

$inputData = file_get_contents($inputFile);

$result = isCorrectBracketSequence($inputData);

file_put_contents($outputFile, $result ? 'правильно' : 'не правильно');

?>
