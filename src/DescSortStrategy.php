<?php

namespace Kotyaaa\Strategy;


class DescSortStrategy implements SortStrategyInterface
{

    /**
     * @param $data
     * @return array
     */
    protected function sort($data): array
    {
        return \arsort($data);
    }
}
