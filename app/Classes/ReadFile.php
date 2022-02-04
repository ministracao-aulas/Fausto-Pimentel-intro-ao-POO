<?php

namespace App\Classes;

class ReadFile
{
    /**
     * function getLine
     *
     * @param string $file_path
     * @return string
     */
    public static function getLine(string $file_path)
    {
        if(!file_exists($file_path))
            return null;

        $file_handle = fopen($file_path, 'r');

        while(!feof($file_handle))
        {
            yield fgets($file_handle);
        }
    }
}
