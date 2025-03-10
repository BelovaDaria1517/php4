<?php

$text = "Тестовый текст. Тестовый текст содержит какое-то частое слово, самое частое слово - это слово 'текст' текст.";
echo mostRecent($text);

/**
 * Находит самое частое слово в тексте.
 *
 * @param string $text Входной текст.
 * @return string Самое частое слово или сообщение об ошибке, если текст превышает 1000 символов.
 */
function mostRecent(string $text): string 
{  
    // Проверка длины текста
    if (strlen($text) > 1000) {
        return "Текст превышает 1000 символов.";
    }

    // Приведение текста к нижнему регистру и удаление знаков препинания
    $text = strtolower($text);
    $text = str_replace([',', '.', '!', '?', ';', ':', "'", '!'], '', $text);

    // Разделение текста на слова
    $words = explode(' ', $text);

    // Подсчёт количества вхождений каждого слова
    $wordCounts = [];

    foreach ($words as $word) {
        if (isset($wordCounts[$word])) {
            $wordCounts[$word]++;
        } else {
            $wordCounts[$word] = 1;
        }
    }

    // Поиск самого частого слова
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
