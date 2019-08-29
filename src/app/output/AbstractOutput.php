<?php
namespace app\output;

/**
 * Class AbstractOutput
 * @package app\output
 */
abstract class AbstractOutput
{
    /**
     * @param array $item
     * @param bool $isFinalItem
     */
    abstract function write(array $item, $isFinalItem = false): void;
}