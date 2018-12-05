<?php

namespace Kotyaaa\Strategy;


class AscSortStrategy implements SortStrategyInterface
{

    /**
     * @param $data
     * @return array
     */
    public function sort($data): array
    {
        \asort($data);
        return $data;
    }
}
