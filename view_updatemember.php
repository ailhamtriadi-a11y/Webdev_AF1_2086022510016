<?php
require_once("controller_member.php");
$updateID = $_GET['updateID'] ?? null;
$member = ($updateID !== null) ? (getAllMember()[$updateID] ?? null) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Update Member</title>
</head>
<body>
    <div class="container p-3">
        <div class="card text-center mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item"><a class="nav-link" href="view_addmember.php">Employee</a></li>
                    <li class="nav-item"><a class="nav-link active" href="view_member.php">Office</a></li>
                    <li class="nav-item"><a class="nav-link" href="view_officeemployee.php">Office-Employee</a></li>
                </ul>
            </div>
        </div>

        <h1 class="mb-4">Update Member</h1>

        <form method="POST" action="controller_member.php">
            <input type="hidden" name="updateID" value="<?=$updateID?>">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Name</label>
                    <input type="text" class="form-control" name="inputName" value="<?=$member->Name??''?>" placeholder="Example: Asep Rodrigo">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age" value="<?=$member->Age??''?>" placeholder="Example: 24">
                </div>
                <div class="form-group col-md-6">
                    <label>Number</label>
                    <input type="text" class="form-control" name="number" value="<?=$member->Number??''?>" placeholder="Example: 895-------08755">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?=$member->Email??''?>" placeholder="Example: AsepRodrigo@gmail.com">
                </div>
                <div class="form-group col-md-4">
                    <label>State</label>
                    <select class="form-control" name="location">
                        <option value="UC Surabaya" <?=($member&&$member->Location=='UC Surabaya')?'selected':''?>>UC Surabaya</option>
                        <option value="UC Makassar" <?=($member&&$member->Location=='UC Makassar')?'selected':''?>>UC Makassar</option>
                        <option value="UC Jakarta" <?=($member&&$member->Location=='UC Jakarta')?'selected':''?>>UC Jakarta</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="<?=$member->City??''?>" placeholder="Example: Surabaya">
                </div>
            </div>

            <button name="button_update" type="submit" class="btn" style="background-color: #9be0fd; color: #000; border: 1px solid #000; font-weight: 500;">Update</button>
        </form>
    </div>
</body>
</html>