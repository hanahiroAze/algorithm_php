<?php

/**
 * Created by PhpStorm.
 * User: hanai
 * Date: 2017/01/02
 * Time: 13:26
 */
class Stack
{
    private $stack = array();

    public function push($value)
    {
        $this->stack[] = $value;
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function length()
    {
        return count($this->stack);
    }
}