<?php

require_once "config.php";

class Validation {


    public function getValideFullName($fname){
        $fname = trim($fname);

        if (empty($fname)) {
            return false;
        }
        if(preg_match("/^[a-zA-Z ]+$/", $fname)){
            return $fname;
        }else{
            echo"invalide name";
            return false;
        }
    }
    public function getValideAddress($Address){
        $Address = trim($Address);

        if (empty($Address)) {
            return false;
        }
        if(preg_match("/^[a-zA-Z0-9 ]+$/", $Address)){
            return $Address;
        }else{
            echo"invalide name";
            return false;
        }
    }
    public function getValideEmail($email){
        $email = trim($email);

        if (empty($email)) {
            return false;
        }
        if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
            return $email;
        }else{
            echo"invalide email";
            return false;
        }
    }
    public function getValidePhoneNumber($phoneNumber){
        $phoneNumber = trim($phoneNumber);

        if (empty($phoneNumber)) {
            return false;
        }
        if(preg_match("/^(\\+212|0)(6|7)[0-9]{8}$/", $phoneNumber)){
            return $phoneNumber;
        }else{
            echo"invalide phone number";
            return false;
        }
    }

    public function getValideId($id){
        if(preg_match("/^[0-9]+$/", $id) && !empty($id)){
            return $id;
        }else{
            echo"invalide id";
            return false;
        }
    }
    public function getValideDepartmentId($departmentId){
        if (empty($departmentId)) {
            return false;
        }
            $db = new Config();
            $query = "select id from department where id = ?";
            $stm = $db->getPdo()->prepare($query);
            $stm->execute([$departmentId]);
        if($stm->fetchColumn() !== false){
            return $departmentId;
        }else{
            echo"invalide departmentId";
            return false;
        }
    }

}