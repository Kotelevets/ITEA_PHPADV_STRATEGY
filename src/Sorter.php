<?php

namespace Kotyaaa\Strategy;


class Sorter
{
    private $strategy;
    private $data = [];

    /**
     * Sorter constructor.
     * @param $array
     * @param SortStrategyInterface $strategy
     */
    public function __construct($array, SortStrategyInterface $strategy = null)
    {
        $this->data     = $array;
        $this->strategy = $strategy ?? new NullSortStrategy();
    }

    /**
     * @return array
     */
    public function sort(): array
    {
        $this->data = $this->strategy->sort($this->data);
        return $this->data;
    }

    /**
     * @param SortStrategyInterface $strategy
     */
    public function setSortStrategy(SortStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return \implode(", ", $this->data);
    }
}
