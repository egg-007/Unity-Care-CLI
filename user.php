<?php

require_once "config.php";

abstract class User{

    public $id;
    protected $fullName;
    protected $email;
    protected $phoneNumber;
    protected $address;

    abstract public function getList();
    abstract public function delete($id);
    abstract public function add($data);
    abstract public function search($id);
    abstract public function update($id,$data);

    
}