<?php
require_once("Model_officeemployee.php");
require_once("Model_member.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["officeEmployeeList"])) {
    $_SESSION["officeEmployeeList"] = array();
}

function createOfficeEmployee() {
    $empIndex = $_POST["employee"] ?? null;
    $office = $_POST["office"] ?? '';

    if ($empIndex !== null && isset($_SESSION["memberlist"][$empIndex])) {
        $employeeObj = $_SESSION["memberlist"][$empIndex];
        $item = new Model_officeemployee($employeeObj, $office);
        $_SESSION["officeEmployeeList"][] = $item;
    }
}

function getAllOfficeEmployee() {
    return $_SESSION["officeEmployeeList"] ?? [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button_save"])) {
    createOfficeEmployee();
    header("Location: view_officeemployee.php");
    exit();
}
?>