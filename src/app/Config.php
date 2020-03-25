<?php
namespace app;

/**
 * Class Config
 * @package app
 */
class Config
{
    private $config;

    /**
     * Config constructor.
     * @param $configFile
     * @throws \Exception
     */
    public function __construct($configFile)
    {
        if (!file_exists($configFile)) {
            throw new \Exception('config file does not exist');
        }

        $this->config = require_once $configFile;

        if (!$this->check()) {
            throw new \Exception('config is wrong format');
        }
    }

    /**
     * @return bool
     */
    private function check():bool
    {
        //TODO: it is very simple checks for the config file structure. 
        //TODO: in the real app this checks will be more fluent
        return isset($this->config['input']) && isset($this->config['output']);
    }

    /**
     * @return array
     */
    public function getInput(): array
    {
        return $this->config['input'];
    }

    /**
     * @return array
     */
    public function getOutput(): array
    {
        return $this->config['input'];
    }
}
