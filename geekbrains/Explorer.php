<?php

class Explorer
{
    function findDirectory(string $path)
    {
        $directory = new DirectoryIterator($path);
        $this->getDirectory($directory);
    }

    function getDirectory(DirectoryIterator $directory)
    {
        foreach ($directory as $item) {
           if (!$item->isDot()) {
               echo $item . "<br>";
           }
        }
    }
}