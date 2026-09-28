<?php
require_once("Model_member.php"); // Muat dulu definisi class-nya
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["memberlist"])) {
    $_SESSION["memberlist"] = array();
}


function createMember() {
    $member = new Model_member();
    $member->Name = $_POST["inputName"];
    $member->Age = $_POST["age"];
    $member->Number = $_POST["number"];
    $member->Email = $_POST["email"];
    $member->Location = $_POST["location"] ?? ''; // Tambahkan lokasi jika ada
    $member->City = $_POST["city"] ?? ''; // Tambahkan city jika ada
    array_push($_SESSION["memberlist"], $member);
}

function updateMember($index) {
    if (isset($_SESSION["memberlist"][$index])) {
        $_SESSION["memberlist"][$index]->Name = $_POST["inputName"] ?? '';
        $_SESSION["memberlist"][$index]->Age = $_POST["age"] ?? '';
        $_SESSION["memberlist"][$index]->Number = $_POST["number"] ?? '';
        $_SESSION["memberlist"][$index]->Email = $_POST["email"] ?? '';
        $_SESSION["memberlist"][$index]->Location = $_POST["location"] ?? ''; // Update lokasi jika ada
        $_SESSION["memberlist"][$index]->City = $_POST["city"] ?? ''; // Update city jika ada
    }
}

function getAllMember() {
    return $_SESSION["memberlist"];

}

function deleteMember($index) {
    unset($_SESSION['memberlist'][$index]);
}

function getMemberWithID($index) {
    return $_SESSION["memberlist"][$index];
}

if (isset($_POST["button_register"])) {
    createMember();
    header("Location: view_member.php");
    exit();
}

if (isset($_GET["deleteID"])) {
    $deleteID = $_GET["deleteID"];
    deleteMember($_GET["deleteID"]);
    header("Location: view_member.php");
    exit();
}

if (isset($_POST["button_update"])) {
    $updateID = $_POST["updateID"];
    updateMember($updateID); // <-- Cukup kirim $updateID saja
    header("Location: view_member.php");
    exit();
}

?>