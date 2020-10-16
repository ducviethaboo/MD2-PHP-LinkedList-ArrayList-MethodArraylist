<?php


class MyList
{
    public $size = 0;
    public $array = [];

    public function insert($index, $data)
    {
        $num = 0;
        if (is_numeric($index)) {
            array_splice($this->array, $index, $num, $data);
        }
        $this->size++;
        return $this->array;
    }

    public function add($data)
    {
        array_push($this->array, $data);
        $this->size++;
    }

    public function remove($index)
    {
        if (is_numeric($index)) {
            array_splice($this->array, $index, 1);
        }
        return $this->array;
    }

    public function get($index)
    {
        if (is_numeric($index)) {
            $position = $this->array[$index];
        }
        return $position;
    }

    public function sort()
    {
        sort($this->array);
        return $this->array;
    }

    public function clear()
    {
        $this->array = [];
    }

    public function size()
    {
        return $this->size;
    }

    public function addAll($arr)
    {
        foreach ($arr as $value) {
            array_push($this->array, $value);
        }
        return $this->array;
    }


}