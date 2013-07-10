<?php

/**
 * bootstrap file - functions, etc.
 */

// Force full UTF-8 handling of output
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

/**
 * Autoloader
 */
spl_autoload_register(function ($class) {
    include 'Fonts/' . $class . '.php';
});

/**
 * Loads each font class to generate menu options.
 * The keys are the class name.
 * Values are the sample text.
 *
 * @return array
 * @todo   Works for now, inefficient with many fonts.
 */
function getFontList() {
    $exclusions = ['AbstractBaseFont.php', 'FontInterface.php'];
    $opts = [];

    $d = dir(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Fonts');

    while (false !== ($entry = $d->read())) { // loop through the directory
        if (!in_array($entry, $exclusions) && 
                strstr($entry, 'Font.php') && // looking for PHP files that look like fonts
                      !strstr($entry, '#') && // not autosave files
                     !strstr($entry, '~')) {  // and not emacs save files
            $class = str_replace('.php', '', $entry);
            $font = new $class;
            $opts[$class] = $font->getRenderedName();
        }
    }
    return $opts;
}