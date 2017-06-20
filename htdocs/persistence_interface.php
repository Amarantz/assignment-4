<?php

interface PersistenceInterface{
    public function Create($item);
    public function Read($id);
    public function ReadAll();
    public function update($id, $values);
    public function Delete($id);

}