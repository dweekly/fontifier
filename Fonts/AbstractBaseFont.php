<?php

/**
 * Class AbstractBaseFont
 *
 * The base class used by all fonts.
 */
abstract class AbstractBaseFont implements FontInterface
{
    /**
     * Name of the font
     *
     * @var string
     */
    protected $name = '';

    /**
     * Array of character to character translation.
     *
     * @var array
     */
    protected $charMap = [];

    /**
     * sampleText
     *
     * @var string
     */
    protected $sampleText = 'The quick brown fox jumps over the lazy dog';

    /**
     * If true, everything is upper-cased before translation.
     * This should be true if Font only supports uppercase letters.
     *
     * @var bool
     */
    protected $upperCaseOnly = true;

    /**
     * Translates input to new "font"
     *
     * @param string $string Input string
     *
     * @return string
     */
    public function translate($string)
    {
        $str = $this->upperCaseOnly ? strtoupper($string) : $string;

        return implode(array_map([$this, 'fontify'], str_split($str)));
    }

    /**
     * Returns a user-friendly name for the font.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns sample text using the font in question.
     *
     * @return string
     */
    public function getSample()
    {
        return $this->translate($this->sampleText);
    }

    /**
     * Helper method used via array_map to do the translation.
     *
     * @param string $char The character we are translating.
     *
     * @return string
     */
    protected function fontify($char)
    {
        $rv = $char;

        if (array_key_exists($char, $this->charMap)) {
            $rv = $this->charMap[$char];
        }

        return $rv;
    }
}
