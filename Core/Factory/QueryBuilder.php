<?php

namespace Core\Factory;

class QueryBuilder
{
    /**
     * function select
     *
     * @param ...$columns
     * @return
     */
    public static function select(...$columns)
    {
        var_dump($columns);
    }
}
