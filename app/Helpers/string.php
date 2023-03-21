<?php

if (!function_exists('cut_string')) {
    /**
     *  Обрезает строку, если она длиннее чем параметр $length, а вместо отрезанной части добавляется $appends
     *
     * @param  string  $string  Исходная строка
     * @param  int  $length  Максимальная длина строки, выше которой происходит ее обрезание
     * @param  string  $appends  Какие символы добавить вместо отрезанной части строки
     * @return string
     */
    function cut_string(string $string, int $length = 12, string $appends = '...'): string
    {
        if (mb_strlen($string) > $length) {
            $cutLine = mb_substr($string, 0, $length);
            $string = $cutLine.$appends;
        }
        return $string;
    }
}

if (!function_exists('phone')) {
    /**
     *  Форматирует номер телефона по формату +n (123) 456-78-90
     *  Если первая цифра 8, тогда замена на 7
     *  Пример вход: 132528088602
     *  результат: +13 (252) 808-86-02
     *
     * @param  int|string  $phone  Номер телефона
     * @return string
     */
    function phone(int|string $phone): string
    {
        settype($phone, 'string');

        // этот кастыль для номеров из РФ
        if (iconv_strlen($phone) == 11 && $phone[0] == 8) {
            $phone[0] = 7;
        }

        return preg_replace('/^(\d*)(\d{3})(\d{3})(\d{2})(\d{2})$/', '+$1 ($2) $3-$4-$5', $phone);
        // preg_replace('#(\d)(\d{3})(\d{3})(\d{2})(\d{2})#', '+$1 ($2) $3-$4-$5', $phone);
    }
}
