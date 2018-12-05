<?php

namespace Kotyaaa\Strategy;


class AscSortStrategy implements SortStrategyInterface
{

    /**
     * @param $data
     * @return array
     */
    protected function sort($data): array
    {
        $return \asort($data);
    }
}
