<?php
function isPerfectNumber($number) {
    if ($number < 1) {
        return false; // Идеальные числа должны быть положительными
    }
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i; 
        }
    }
    return $sum === $number; 
}
function findPerfectNumbers($array) {
    $perfectNumbers = [];
    foreach ($array as $number) {
        if (isPerfectNumber($number)) {
            $perfectNumbers[] = $number; // Добавляем идеальное число в массив
        }
    }
    return $perfectNumbers;
}
// Пример использования
$numbers = [6, 12, 28, 496, 6664, 3356789, 36, 22];
$perfectNumbers = findPerfectNumbers($numbers);
echo "Идеальные числа в массиве: " . implode(', ', $perfectNumbers) . "\n";

