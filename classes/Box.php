<?php

class Box
{
    protected mixed $items = [];


    public function __construct($items = [])
    {
        $this->items = $items;
    }


    public function has($item): bool
    {
        return in_array($item, $this->items);
    }


    public function takeOne(): string
    {
        return array_shift($this->items);
    }


    public function startsWith($letter): array
    {
        return array_filter($this->items, function ($item) use ($letter) {
            return stripos($item, $letter) === 0;
        });
    }
}