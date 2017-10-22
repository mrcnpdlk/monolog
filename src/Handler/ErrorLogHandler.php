<?php
/**
 * Created by Marcin.
 * Date: 22.10.2017
 * Time: 22:15
 */

namespace mrcnpdlk\Monolog\Handler;


use mrcnpdlk\Monolog\Helper;

class ErrorLogHandler extends \Monolog\Handler\ErrorLogHandler
{
    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
        parent::write($record);

        if (isset($record['message_orig'])) {
            error_log(Helper::logSuffix($record['message_orig']), $this->messageType);
        }
    }
}
