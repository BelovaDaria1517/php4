<?php
function mostRecent($text) {
    $text = substr($text, 0, 1000); // Ограничиваем текст до 1000 символов
    $words = str_word_count(strtolower($text), 1); // Разбиваем на слова
    $wordCounts = array_count_values($words); // Считаем частоту слов
    arsort($wordCounts); // Сортируем по убыванию частоты
    return array_key_first($wordCounts); // Возвращаем самое частое слово
}
// Пример использования
$text = "Привет, мир! Мир огромен, и мир прекрасен. Привет всем!";
echo "Самое частое слово: " . (mostRecent($text) ?? "не найдено") . "\n";


