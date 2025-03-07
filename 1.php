<?php
function alphabeticalOrder($str) {
    $chars = str_split($str);
    natcasesort($chars); // Сортировка с учетом регистра
    return implode('', $chars);
}

$input = 'Alphabetical';
$result = alphabeticalOrder($input);
echo $result; // Вывод: 'aAabcehillpt'

