<?php

class Queue
{
    private $list = array();

    public function enqueue($value)
    {
        $this->list[] = $value;
    }

    public function dequeue()
    {
        // return first data in the list
        return array_shift($this->list);
    }

    public function length()
    {
        return count($this->list);
    }
}