<?php
namespace models;
class EmployeeManager {
    private array $employees;
    public function __construct(){
        $this->employees = [];
    }

    public function add($employee){
        $this->employees[]= $employee;
    }
    public function delete($employees){
        $this->employees[]= $employees;
    }
    public function show($employees){
        $this->employees[]= $employees;
    }
    public function edit($employees){
        $this->employees[]= $employees;
    }
    public function details($employees){
        $this->employees[]= $employees;
    }

    public function getEmployees(){
        return $this->employees;
    }
}
