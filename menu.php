<?php
class Menu{
    
    function menu(){
    
        $a = 0;
        while($a == 0){
        echo "\n=== Unity Care CLI === \n";
        echo "1. Manage Patients \n";
        echo "2. Manage Doctors \n";
        echo "3. Manage Departments \n";
        echo "4. Statistics \n";
        echo "5. Exit \n\n";
        
        $number = (int)readline("Enter a number: \n");
        
        
        switch ($number) {
            case 1:
                $this->Patient();
                $a++;
                break;
            case 2:
                $this->Doctor();
                $a++;
                break;
            case 3:
                $this->Department();
                $a++;
                break;
            case 4:
                $this->Statistic();
                $a++;
                break;
            case 5:
                exit;
            default:
                echo "write one of this numbers 1,2,3,4,5\n\n";
                $this->menu();
                break;
        }
        }
    }
    public function Patient(){
        echo "\n=== Patient Management ===\n";
        echo "1. List all patients\n";
        echo "2. Search for a patient\n";
        echo "3. Add a patient\n";
        echo "4. Edit a patient\n";
        echo "5. Delete a patient\n";
        echo "6. Back\n";
    
        $numberP = (int)readline("Enter a number: \n");
        if($numberP == 6){
            $this->menu();
        }else{
            echo "write one of this numbers 1,2,3,4,5\n\n";
            $this->Patient();
        }
    }
    function Doctor(){
        echo "\n=== Doctor Management ===\n";
        echo "1. List all Doctors\n";
        echo "2. Search for a Doctor\n";
        echo "3. Add a Doctor\n";
        echo "4. Edit a Doctor\n";
        echo "5. Delete a Doctor\n";
        echo "6. Back\n";
    
        $numberDr = (int)readline("Enter a number: \n");
        if($numberDr == 6){
            $this->menu();
        }else{
            echo "write one of this numbers 1,2,3,4,5\n\n";
            $this->Patient();
        }
    }
    function Department(){
        echo "\n=== Department Management ===\n";
        echo "1. List all Departments\n";
        echo "2. Search for a Department\n";
        echo "3. Add a Department\n";
        echo "4. Edit a Department\n";
        echo "5. Delete a Department\n";
        echo "6. Back\n";
    
        $numberDp = (int)readline("Enter a number: \n");
        if($numberDp == 6){
            $this->menu();
        }else{
            echo "write one of this numbers 1,2,3,4,5\n\n";
            $this->Patient();
        }
    }
    function Statistic(){
        echo "\n=== Statistics ===\n";
        echo "1. Average age of Patient\n";
        echo "2. Average years of service of doctors\n";
        echo "3. Most popular Department\n";
        echo "4. Number of patient in departments\n";
        echo "5. Back\n";
        $numberS = (int)readline("Enter a number: \n");
        if($numberS == 5){
            $this->menu();
        }else{
            echo "write one of this numbers 1,2,3,4,5\n\n";
            $this->Patient();
        }
    }
}

$start = new Menu();

$start->menu();