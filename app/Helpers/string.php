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
