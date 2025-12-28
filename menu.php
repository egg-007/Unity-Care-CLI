<?php

require_once "patient.php";
require_once "department.php";
require_once "validation.php";


class Menu
{

    private $Validation;

    public function __construct()
    {
        $this->Validation = new Validation();
    }
    public function menu()
    {
        $a = 0;
        while ($a == 0) {
            echo "\n=== Unity Care CLI === \n";
            echo "1. Manage Patients \n";
            echo "2. Manage Doctors \n";
            echo "3. Manage Departments \n";
            echo "4. Statistics \n";
            echo "5. Exit \n\n";

            $number = (int) readline("Enter a number: \n");


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
    public function Patient()
    {

        $p = new Patient();

        echo "\n=== Patient Management ===\n";
        echo "1. List all patients\n";
        echo "2. Search for a patient\n";
        echo "3. Add a patient\n";
        echo "4. Edit a patient\n";
        echo "5. Delete a patient\n";
        echo "6. Back\n";

        $numberP = (int) readline("Enter a number: \n");
        switch ($numberP) {
            case 1:
                $p->showList();
                break;
            case 2:
                
                $patient = $p->search((int)readline("Enter a ID: \n"));

                if ($patient) {
                    foreach($patient as $key => $value)
                    {
                        echo "$key  :  $value";
                    }
                } else {
                    echo "Patient not found";
                }
                break;
            case 3:
                $full_name = readline("Enter a patient full name: \n");
                $email = readline("Enter a email: \n");
                $phone_number = readline("Enter a phone_number: \n");
                $date_of_birth = readline("Enter a date_of_birth: \n");
                $address = readline("Enter a address: \n");
                $gender = readline("Enter a gender: \n");

                $data = [
                    "full_name" => $this->Validation->getValideFullName($full_name),
                    "email" => $this->Validation->getValideEmail($email),
                    "phone_number" => $this->Validation->getValidePhoneNumber($phone_number),
                    "gender" => $this->Validation->getValideDepartmentId($gender),
                    "date_of_birth" => $this->Validation->getValideFullName($date_of_birth),
                    "address" => $this->Validation->getValideAddress($address)
                ];
                $p->add($data);
                break;
            case 4:
                $id = readline("Enter a patient id: \n");
                $full_name = readline("Enter a patient full name: \n");
                $email = readline("Enter a email: \n");
                $phone_number = readline("Enter a phone_number: \n");
                $date_of_birth = readline("Enter a date_of_birth: \n");
                $address = readline("Enter a address: \n");
                $gender = readline("Enter a gender: \n");

                $data = [
                    "full_name" => $this->Validation->getValideFullName($full_name),
                    "email" => $this->Validation->getValideEmail($email),
                    "phone_number" => $this->Validation->getValidePhoneNumber($phone_number),
                    "gender" => $this->Validation->getValideDepartmentId($gender),
                    "date_of_birth" => $this->Validation->getValideFullName($date_of_birth),
                    "address" => $this->Validation->getValideAddress($address)
                ];
                $p->update($id,$data);
                break;
            case 5:
                $deleteId = (int) readline("Enter a id: \n");
                $p->delete($this->Validation->getValideId($deleteId));
                break;
            default:
                echo "write one of this numbers 1,2,3,4,5\n\n";
                $this->Patient();
                break;
        }
    }
    public function Doctor()
    {
        echo "\n=== Doctor Management ===\n";
        echo "1. List all Doctors\n";
        echo "2. Search for a Doctor\n";
        echo "3. Add a Doctor\n";
        echo "4. Edit a Doctor\n";
        echo "5. Delete a Doctor\n";
        echo "6. Back\n";

        $dr = new Doctor();

        $numberDr = (int) readline("Enter a number: \n");
        switch ($numberDr) {
            case 1:
                $dr->showList();
                break;
            case 2:
                $doctor = $dr->search((int)readline("Enter a ID: \n"));

                if ($doctor) {
                    foreach($doctor as $key => $value)
                    {
                        echo "$key  :  $value";
                    }
                } else {
                    echo "doctor not found";
                }
                break;
            case 3:
                $full_name = readline("Enter a doctor full name: \n");
                $email = readline("Enter a email: \n");
                $phone_number = readline("Enter a phone_number: \n");
                $sepcialization = readline("Enter a sepcialization: \n");
                $address = readline("Enter a address: \n");
                $department_id = readline("Enter a department_id: \n");

                $data = [
                    "full_name" => $this->Validation->getValideFullName($full_name),
                    "email" => $this->Validation->getValideEmail($email),
                    "phone_number" => $this->Validation->getValidePhoneNumber($phone_number),
                    "sepcialization" => $this->Validation->getValideFullName($sepcialization),
                    "address" => $this->Validation->getValideAddress($address),
                    "department_id" => $this->Validation->getValideDepartmentId($department_id)
                ];
                $dr->add($data);
                break;
            case 4:
                $id = readline("Enter a doctor id: \n");
                $full_name = readline("Enter a doctor full name: \n");
                $email = readline("Enter a email: \n");
                $phone_number = readline("Enter a phone_number: \n");
                $sepcialization = readline("Enter a sepcialization: \n");
                $address = readline("Enter a address: \n");
                $department_id = readline("Enter a department_id: \n");

                $data = [
                    "full_name" => $this->Validation->getValideFullName($full_name),
                    "email" => $this->Validation->getValideEmail($email),
                    "phone_number" => $this->Validation->getValidePhoneNumber($phone_number),
                    "sepcialization" => $this->Validation->getValideFullName($sepcialization),
                    "address" => $this->Validation->getValideAddress($address),
                    "department_id" => $this->Validation->getValideDepartmentId($department_id)
                ];
                $dr->update($id,$data);
                break;
            case 5:
                $deleteId = (int) readline("Enter a id: \n");
                $dr->delete($this->Validation->getValideId($deleteId));
                exit;
            default:
                echo "write one of this numbers 1,2,3,4,5\n\n";
                $this->Doctor();
                break;
        }
    }
    public function Department()
    {
        echo "\n=== Department Management ===\n";
        echo "1. List all Departments\n";
        echo "2. Search for a Department\n";
        echo "3. Add a Department\n";
        echo "4. Edit a Department\n";
        echo "5. Delete a Department\n";
        echo "6. Back\n";



        $dp = new Department();
        $numberDp = (int) readline("Enter a number: \n");
        switch ($numberDp) {
            case 1:
                $dp->showList();
                break;
            case 2:
                $Department = $dp->search((int)readline("Enter a ID: \n"));

                if ($Department) {
                    foreach($Department as $key => $value)
                    {
                        echo "$key  :  $value";
                    }
                } else {
                    echo "Department not found";
                }
                break;
            case 3:
                $department_name = readline("Enter a department name: \n");
                $location = readline("Enter a location: \n");

                $data = [
                    "department_name" => $this->Validation->getValideFullName($department_name),
                    "location" => $this->Validation->getValideFullName($location)
                ];
                $dp->add($data);
                break;
            case 4:
                $id = readline("Enter a department id: \n");
                $department_name = readline("Enter a department name: \n");
                $location = readline("Enter a location: \n");

                $data = [
                    "department_name" => $this->Validation->getValideFullName($department_name),
                    "location" => $this->Validation->getValideFullName($location)
                ];
                $dp->update($id,$data);
                break;
            case 5:
                $deleteId = (int) readline("Enter a id: \n");
                $dp->delete($this->Validation->getValideId($deleteId));
                break;
            default:
                echo "write one of this numbers 1,2,3,4,5\n\n";
                $this->Department();
                break;
        }
    }
    public function Statistic()
    {
        echo "\n=== Statistics ===\n";
        echo "1. Average age of Patient\n";
        echo "2. Average years of service of doctors\n";
        echo "3. Most popular Department\n";
        echo "4. Back\n";
        $numberS = (int) readline("Enter a number: \n");
        if ($numberS == 5) {
            $this->menu();
        } else {
            echo "write one of this numbers 1,2,3,4,5\n\n";
            $this->Patient();
        }
    }
}

$start = new Menu();

$start->menu();