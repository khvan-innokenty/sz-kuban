<?php
/**
 * Возвращает содержимое SVG-файла
 *
 * @param (string) $name
 * @return string
 */
function inline_svg( $name ) {
    $filename = __DIR__ . '/img/' . $name . '.svg';
    return file_exists( $filename )
         ? file_get_contents( $filename )
         : '';
}


/**
 * Преобразует телефон в формат, пригодный для ссылок
 * Пример: "+ 7 (911) 900-18-16" преобразует в "+79119001816"
 * Фактически удаляет все символы кроме цифр и знака плюс.
 *
 * @param (string) $phone
 * @return string
 */
function filter_phone( $phone ) {
    return preg_replace("/[^\d\+]/", "", $phone );
}



/**
 * Получить красивое представление периода времени:
 *    1 - 2 марта 2018
 *    1 марта - 2 апреля 2018
 *    1 декабря 2018 - 1 января 2019
 * @param string $start в формате yyyy-mm-dd
 * @param string $finish в формате yyyy-mm-dd
 * @return string
 */
function formatDatePeriod($start, $finish) {
    $month = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    $delimiter = ' &ndash; ';

    // Если не задан финиш, присваиваем ему значение старта
    $finish = $finish ? $finish : $start;

    $d1 = explode('-', $start);
    $d2 = explode('-', $finish);

    $d1 = array_map('intval', $d1);
    $d2 = array_map('intval', $d2);

    // Совпадают года
    if ($d1[0] === $d2[0]) {
        // Совпадают месяцы
        if ($d1[1] === $d2[1]) {
            // Совпадают даты
            if ($d1[2] === $d2[2]) {
                return $d1[2] . " " . $month[$d1[1]] . ' ' . $d1[0];
            }
            // Разные даты
            return $d1[2] . $delimiter . $d2[2] . " " . $month[$d1[1]] . ' ' . $d1[0];
        }
        // Разные месяцы
        return  $d1[2] . " " . $month[$d1[1]] . $delimiter . $d2[2] . " " . $month[$d2[1]] . ' ' . $d1[0];
    }
    // Разные года
    else {
        return  $d1[2] . " " . $month[$d1[1]] . " " . $d1[0] . $delimiter . $d2[2] . " " . $month[$d2[1]] . " " . $d2[0];
    }
}