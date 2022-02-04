<?php

namespace App\Classes;

class Paginate
{
    /**
     * function chunk
     *
     * @param int $limit
     * @return string
     */
    public static function chunk(int $limit)
    {
        $index = 0;
        while($index <= 60)
        {
            $sql    =  "select *  from users limit {$limit} index {$index}";
            $index  = $index + $limit;
            yield $sql;
        }
    }
}
