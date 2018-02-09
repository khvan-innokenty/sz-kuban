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