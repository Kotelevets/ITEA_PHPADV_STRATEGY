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
    public function __construct($array, SortStrategyInterface $strategy)
    {
        $this->data     = $array;
        $this->strategy = $strategy;
    }

    /**
     *
     */
    public function sort()
    {
        $this->strategy->sort($this->data);
    }

    /**
     * @param SortStrategyInterface $strategy
     */
    public function setSortStrategy(SortStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return \implode($this->data);
    }
}
