<?php
/**
 * Created by PhpStorm.
 * User: daRula
 * Date: 26/01/2018
 * Time: 02:14
 */
class BinarySearch
{
    private $array;
    private $end;
    private $letter;
    public function usingModulus()
    {
        $is_even = $this->end % 2 == 0 ? true : false;
        $middle = floor($this->end) / 2;
        $iteration_end = $is_even ? $this->end : ($this->end + 1);

        for($i = 0; $i < ($middle); $i++)
        {
            if($this->array[$i] === $this->letter || $this->array[$iteration_end - 1] === $this->letter)
                return true;
        }

        return false;
    }

    function __construct(array $array, $letter)
    {
        $this->array = $array;
        $this->letter = $letter;
        $this->end = sizeof($this->array);

        //You may replace this
        $this->usingModulus();
    }
}

$array = ['a', 'a', 'b', 'c', 'd', 'd'];

$bin = new BinarySearch($array, 'e');
echo $bin->usingModulus() ? "Found" : "Not found";
