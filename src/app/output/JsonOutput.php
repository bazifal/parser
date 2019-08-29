<?php
namespace app\output;

/**
 * Class JsonOutput
 * @package app\output
 */
class JsonOutput extends AbstractOutput
{
    /**
     * @var bool
     */
    private $isFirstCall = true;

    /**
     * @var resource
     */
    private $file;

    /**
     * @inheritDoc
     */
    public function write(array $item, $isFinalItem = false): void
    {
        if ($this->isFirstCall) {
            
        }
    }
}