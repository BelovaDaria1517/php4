<?php
$inputString = readline("Введите строку: ");
$result = alphabeticalOrder($inputString);
echo "Результат: $result\n";
function alphabeticalOrder(string $inputString): string
{
    $characters = str_split($inputString);
    sort($characters);
    return implode('', $characters);
}
