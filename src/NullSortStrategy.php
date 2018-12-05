<?php

namespace Kotyaaa\Strategy;


class NullSortStrategy implements SortStrategyInterface
{

    /**
     * @param $data
     * @return array
     */
    public function sort($data): array
    {
        // do nothing
    }
}
