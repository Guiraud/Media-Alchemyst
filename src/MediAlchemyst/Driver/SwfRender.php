<?php

namespace MediAlchemyst\Driver;

use Monolog\Logger;
use SwfTools\Binary\Swfrender as SwfRenderBinary;
use SwfTools\Exception;

class SwfRender extends Provider
{

    protected $driver;

    public function __construct(Logger $logger, $use_binary = null)
    {
        $this->logger = $logger;

        if ($use_binary)
        {
            $this->driver = new SwfRenderBinary($use_binary);
        }
        else
        {
            try
            {
                $this->driver = SwfRenderBinary::load(new \SwfTools\Configuration());
            }
            catch (Exception\BinaryNotFoundException $e)
            {
                throw new Exception\RuntimeException('No driver available');
            }
        }
    }

    public function getDriver()
    {
        return $this->driver;
    }

}