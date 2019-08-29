<?php
namespace app;

use app\data\Sorter;
use app\input\AbstractInput;
use app\output\AbstractOutput;

/**
 * Class App
 * @package src
 */
class App
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var AbstractInput
     */
    private $input;

    /**
     * @var AbstractOutput
     */
    private $output;

    /**
     * @var array
     */
    private $filters = [];

    /**
     * @var array
     */
    private $sort = [];

    /**
     * App constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;

        $this->readUserArguments();

        $inputConfig = $this->config;
        $inputClassName = $inputConfig['class'];
        $this->input = new $inputClassName($inputConfig['source'], $inputConfig['format'], $this->filters);

        $outputConfig = $this->config;
        $outputClassName = $outputConfig['class'];
        $this->output = new $outputClassName();
    }

    /**
     * boostrap func
     */
    public function run(): void
    {
        if (!empty($sort)) {
            $data = [];
            foreach ($this->input->fetch() as $item) {
                $data[] = $item;
            }
            $sorter = new Sorter();
            $sorter->sort($data, $this->sort);
            foreach ($data as $item) {
                $this->writeOutput($item);
            }
        } else {
            foreach ($this->input->fetch() as $item) {
                $this->writeOutput($item);
            }
        }
    }

    private function readUserArguments(): void
    {

    }

    private function writeOutput(array $item): void
    {
        $this->output->write();
    }
}