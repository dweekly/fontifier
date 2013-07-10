<?php

/**
 * Class EnclosedFont
 *
 * Silly example using the Enclosed Alphanumerics Range
 */
class EnclosedFont extends AbstractBaseFont
{
    /**
     * Name of the font
     *
     * @var string
     */
    protected $name = 'Enclosed';

    /**
     * If true, everything is upper-cased before translation.
     * This should be true if Font only supports uppercase letters.
     *
     * @var bool
     */
    protected $upperCaseOnly = false;

    /**
     * charMap
     *
     * @var array
     */
    protected $charMap = [
        "A" => "Ⓐ",
        "B" => "Ⓑ",
        "C" => "Ⓒ",
        "D" => "Ⓓ",
        "E" => "Ⓔ",
        "F" => "Ⓕ",
        "G" => "Ⓖ",
        "H" => "Ⓗ",
        "I" => "Ⓘ",
        "J" => "Ⓙ",
        "K" => "Ⓚ",
        "L" => "Ⓛ",
        "M" => "Ⓜ",
        "N" => "Ⓝ",
        "O" => "Ⓞ",
        "P" => "Ⓟ",
        "Q" => "Ⓠ",
        "R" => "Ⓡ",
        "S" => "Ⓢ",
        "T" => "Ⓣ",
        "U" => "Ⓤ",
        "V" => "Ⓥ",
        "W" => "Ⓦ",
        "X" => "Ⓧ",
        "Y" => "Ⓨ",
        "Z" => "Ⓩ",

        "a" => "ⓐ",
        "b" => "ⓑ",
        "c" => "ⓒ",
        "d" => "ⓓ",
        "e" => "ⓔ",
        "f" => "ⓕ",
        "g" => "ⓖ",
        "h" => "ⓗ",
        "i" => "ⓘ",
        "j" => "ⓙ",
        "k" => "ⓚ",
        "l" => "ⓛ",
        "m" => "ⓜ",
        "n" => "ⓝ",
        "o" => "ⓞ",
        "p" => "ⓟ",
        "q" => "ⓠ",
        "r" => "ⓡ",
        "s" => "ⓢ",
        "t" => "ⓣ",
        "u" => "ⓤ",
        "v" => "ⓥ",
        "w" => "ⓦ",
        "x" => "ⓧ",
        "y" => "ⓨ",
        "z" => "ⓩ",

        "1" => "①",
        "2" => "②",
        "3" => "③",
        "4" => "④",
        "5" => "⑤",
        "6" => "⑥",
        "7" => "⑦",
        "8" => "⑧",
        "9" => "⑨",
        "0" => "⓪",
    ];
}