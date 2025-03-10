<?php
function mostRecent(string $text): string {
    if (strlen($text) > 1000) {
        throw new InvalidArgumentException('Текст не должен превышать 1000 символов.');
    }
    $text = strtolower($text);
    $text = preg_replace('/[^ws]/u', '', $text);
    $words = explode(' ', $text);
    $wordCount = array_count_values($words);
    $mostFrequentWord = '';
    $maxCount = 0;
    foreach ($wordCount as $word => $count) {
        if ($count > $maxCount) {
            $maxCount = $count;
            $mostFrequentWord = $word;
        }
    }
    return $mostFrequentWord;
}
$textInput = "Это пример текста, где слово 'пример' встречается несколько раз. Пример текста для тестирования.";
$mostFrequent = mostRecent($textInput);
echo "Самое часто встречающееся слово: '$mostFrequent'";

