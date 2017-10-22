<?php
/**
 * Created by Marcin.
 * Date: 22.10.2017
 * Time: 22:25
 */

namespace mrcnpdlk\Monolog\Handler;


use mrcnpdlk\Monolog\Helper;

class StreamHandler extends \Monolog\Handler\StreamHandler
{
    /**
     * Write to stream
     *
     * @param resource $stream
     * @param array    $record
     */
    protected function streamWrite($stream, array $record)
    {
        parent::streamWrite($stream, $record);
        if ($record['message_orig']) {
            fwrite($stream, Helper::logSuffix($record['message_orig']));
        }

    }
}
