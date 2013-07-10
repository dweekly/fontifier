<?php

/**
 * Class FontInterface
 *
 * Interface used by all fonts.
 */
interface FontInterface
{
    /**
     * Translates input to new "font"
     *
     * @param string $string Input string
     *
     * @return string
     */
    public function translate($string);

    /**
     * Returns a user-friendly name for the font.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns sample text using the font in question.
     *
     * @return string
     */
    public function getSample();
}