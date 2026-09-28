<?php
require_once("controller_member.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      <div class="container p-3">
        <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" ($active_page == 'view_addmember.php') ? 'active' : '' href="view_addmember.php">Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" ($active_page == 'view_member.php') ? 'active' : '' href="view_member.php">Office</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" ($active_page == 'view_officeemployee.php') ? 'active' : '' href="view_officeemployee.php">Office-Employee</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  </div>
</div>
    <div class="container p-3">
    <h1>ALL EMPLOYEE</h1>
<table class="table custom-table">
  <thead>
    <tr>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">No</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Name</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Age</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Number</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Email</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Location</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">City</th>
      <th scope="col" style="background-color: #9be0fd !important; color: #000 !important;">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $counter = 0;
    $allmember = getAllMember();
    foreach ($allmember as $index => $member) {
        $counter++;
    ?>
    <tr>
      <th scope="row"><?=$counter?></th>
      <td><?=$member->Name?></td>
      <td><?=$member->Age?></td>
      <td><?=$member->Number?></td>
      <td><?=$member->Email?></td>
      <td><?=$member->Location?></td>
      <td><?=$member->City?></td>
      <td>
         <a href="view_updatemember.php?updateID=<?=$index?>" class="btn btn-warning">Update</a>
         <a href="controller_member.php?deleteID=<?=$index?>" class="btn btn-danger">Delete</a>
     </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</body>
</html>

