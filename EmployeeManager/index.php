<?php
include_once './models/EmployeeManager.php';
include_once './thongtin/employee.php';

use models\EmployeeManager;
use thongtin\Emloyees;

$employeeManager  = new EmployeeManager();
 $employeeManager->add(new Emloyees("nguyen","thuan","11221","qt","ceo"));
// $employeeManager->add(new Emloyees("vinh"));
$employees = $employeeManager->getEmployees();
foreach ($employees as $employee) {
    echo $employee->setFirstName() . "<br/>";
    // echo $employee->setFirstName() . "<br/>";
    // echo $employee->setFirstName() . "<br/>";
    // echo $employee->setFirstName() . "<br/>";

}

