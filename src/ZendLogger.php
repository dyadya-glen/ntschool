<?php

namespace NtSchool;

use Zend\Log\Logger;

class ZendLogger implements LoggerInterface
{
    protected $logger;

    /**
     * ZendLogger constructor.
     * @param $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    public function warning(string $message)
    {
        $this->logger->info($message);
    }

    public function error(string $message)
    {
        $this->logger->emerg($message);
    }

}