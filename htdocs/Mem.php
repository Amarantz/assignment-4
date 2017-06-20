<?php

include "persistence_interface.php"
class Mem implements "persistence_interface.php"
{
    protected $buf[];

    public function Create($item)
    {
        $this->buf[] = $item;
    }

    public function Read($id)
    {
        return $this->buf[$id];
    }

    public function ReadAll()
{

}
}