<?php
class Model_officeemployee {
    public $Employee;
    public $Office;

    public function __construct($employee = "", $office = "") {
        $this->Employee = $employee;
        $this->Office   = $office;
    }
}
?>