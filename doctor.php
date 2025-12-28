<?php

require_once "config.php";
require_once "user.php";

class Doctor extends User{
    private $specialization;
    private $department;


    private $db = new Config();
    
    public function getList(){
   
            $query = "select * from doctors";
            $stm = $this->db->getPdo()->prepare($query);
            $stm->execute();
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $rows;

    }
    public function showList(){
        $i = 0;
        $row = $this->getList();
        while($row[$i]){
            foreach($row[$i] as $key => $value){
                echo "$key : $value \n";
            }
            echo "\n";
            $i++;
        }
    }
    public function delete($id){
        if ($id == false){
            echo "invalide id";
            return false;
        }

        $query = "delete from doctors where id=?";
        $stm = $this->db->getPdo()->prepare($query);
        $stm->execute([$id]);
    }

    public function add($data){
        $keys = array_keys($data);

        $columns = implode(", ", $keys);
        $values = implode(", ", array_fill(0, count($data), "?"));

        $qry = "INSERT INTO doctors ($columns) values($values)";

        $stmt = $this->db->getPdo()->prepare($qry);
        $stmt->execute(array_values($data));
    }
    public function search($id)
    {
        $query = "SELECT * FROM doctors WHERE id = ?";
        $stm = $this->db->getPdo()->prepare($query);
        $stm->execute([$id]);

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    public function update($id, $data)
    {
        $keys = array_keys($data);

        $columns = implode(" = ?, ", $keys) . " = ?";

        $qry = "UPDATE doctors SET $columns where id = ?";

        $stmt = $this->db->getPdo()->prepare($qry);

        $values = array_values($data);
        $values[] = $id;

        $stmt->execute($values);
    }
}