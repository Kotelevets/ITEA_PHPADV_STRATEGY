<?php

namespace Kotyaaa\Strategy;


class DescSortStrategy implements SortStrategyInterface
{

    /**
     * @param $data
     * @return array
     */
    public function sort($data): array
    {
        \arsort($data);
        return $data;
    }
}
