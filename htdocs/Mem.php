<?php

include "persistence_interface.php";
class Mem implements persistence_interface
{
    private $type;

    protected $buf;

    public function __construct($item){
        $this->buf[$item->asin] = $item;
    }

    public function Count(){
        return count($this->buf);
    }
    public function Create($item)
    {
        $this->buf[] = $item;
    }

    public function Read($id)
    {
        return $this->buf[$id];
    }

    public function ReadAll(){
        return $this->buf;
    }

    public function Update($id, $value)
    {
        //todo update function
    }

    public function Delete($id){

    }

    public function Clear(){
        unset($this->buf);
    }

}