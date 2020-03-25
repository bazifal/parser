<?php
namespace app\input;

/**
 * Class AbstractInput
 * @package app\input
 */
abstract class AbstractInput
{
    /**
     * descriptor or path to the file with the input data
     * @var string|resource
     */
    protected $source;

    /**
     * config with description of the data source with validation rules
     * @var array
     */
    protected $format;

    /**
     * @var array|null
     */
    protected $filters;

    /**
     * AbstractInput constructor.
     * @param string|resource $source
     * @param array $format
     * @param array|null $filters
     */
    public function __construct($source, $format, $filters)
    {
        $this->source = $source;
        $this->format = $format;
        $this->filters = $filters;
    }

    /**
     * @return array
     */
    abstract public function fetch(): ?\Generator;
}
