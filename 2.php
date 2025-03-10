<?php
$text = "Тестовый текст. Тестовый текст содержит какое-то частое слово, самое частое слово - это слово 'текст' текст.";
echo mostRecent($text);

function mostRecent(string $text): string 
{  
    if (strlen($text) > 1000) {
        return "Текст превышает 1000 символов.";
    }
    $text = strtolower($text);
    $text = str_replace([',', '.', '!', '?', ';', ':', "'", '!'], '', $text);

    $words = explode(' ', $text);
    $wordCounts = [];

    foreach ($words as $word) {
        if (isset($wordCounts[$word])) {
            $wordCounts[$word]++;
        } else {
            $wordCounts[$word] = 1;
        }
    }
    $mostFrequentWord = '';
    $maxCount = 0;

    foreach ($wordCounts as $word => $count) {
        if ($count > $maxCount) {
            $mostFrequentWord = $word;
            $maxCount = $count;
        }
    }
    return $mostFrequentWord;
}
