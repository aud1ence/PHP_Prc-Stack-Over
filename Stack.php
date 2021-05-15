<?php


class Stack
{
    public array $stack;
    public int $limit;

    public function __construct(int $limit = 100)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        } else {
            throw new RuntimeException("Stack over flow");
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException("Stack is empty");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}