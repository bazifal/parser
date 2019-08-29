<?php
namespace app\input;

/**
 * Class CsvInput
 * @package app\input
 */
class CsvInput extends AbstractInput
{
    /**
     * @inheritDoc
     */
    public function fetch(): ?\Generator
    {
        if (($file = fopen($this->source, "r")) !== false) {
            while (($row = fgetcsv($file)) !== false) {
                if ($row = $this->formatRow($row)) {
                    yield $row;
                }
            }
            fclose($file);
        }
        return null;
    }

    /**
     * @param array $row
     * @return array|null
     */
    private function formatRow(array $row): ?array
    {
        $result = [];
        foreach ($this->format as $field) {
            if (!isset($row[$field['index']])) {
                return null;
            }
            $result[$field['name']] = $row[$field['index']];
        }
        return $result;
    }

}