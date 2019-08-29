<?php
namespace app\data;

/**
 * Class Filter
 * @package app\data
 */
class Filter
{
    public $condition;

    /**
     * Filter constructor.
     * @param array $condition
     */
    public function __construct(array $condition)
    {
        $this->condition = $condition;
    }

    /**
     * @param $row
     * @return bool
     */
    public function check($row): bool
    {

    }
}