<?php
/**
 * Created by Marcin.
 * Date: 22.10.2017
 * Time: 23:01
 */

namespace mrcnpdlk\Monolog;


class Helper
{
    /**
     * @param $var
     *
     * @return string
     */
    public static function logSuffix($var)
    {
        ob_start();

        if (is_string($var)) {
            echo $var;
        } else {
            var_export($var);
        }

        return ob_get_clean() . "\n";
    }
}
