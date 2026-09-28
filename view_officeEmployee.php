<?php
require_once("controller_officeEmployee.php");
require_once("controller_member.php");

$allOfficeEmployees = getAllOfficeEmployee();
$allMembers = getAllMember();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; background: #fff; margin: 0; padding: 0; }
        .app-card {
            width: 420px;
            margin: 20px auto;
            border: 2px solid #000;
            background: #fff;
        }
        .top-nav {
            background-color: #cbe9fa;
            border-bottom: 2px solid #000;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
        }
        .top-nav a { color: #000; text-decoration: none; }
        .top-nav span { margin: 0 5px; font-weight: normal; }
        .card-body-custom { padding: 25px 20px; }
        .page-title { color: #334177; font-size: 28px; font-weight: bold; text-align: center; margin-bottom: 20px; }
        .custom-table { width: 100%; border-collapse: collapse; border: 2px solid #888; }
        .custom-table th { background: #9be0fd; color: #000; border: 1px solid #888; padding: 8px 12px; font-weight: normal; text-align: left; }
        .custom-table td { background: #fff; border: 1px solid #888; padding: 8px 12px; text-align: left; }
        .form-row-custom { display: flex; align-items: center; margin-bottom: 0; }
        .form-label-custom { width: 35%; text-align: right; padding-right: 15px; font-size: 15px; margin: 0; }
        .form-input-custom { width: 65%; }
        .custom-select {
            border: 1px solid #777;
            border-radius: 0;
            height: 38px;
            color: #000;
        }
        .select-top { border-bottom: 1px solid #777; }
        .select-bottom { border-top: none; }
        .btn-save {
            background-color: #9be0fd;
            color: #000;
            border: 1px solid #000;
            border-radius: 10px;
            padding: 4px 30px;
            font-size: 16px;
            margin-top: 15px;
            cursor: pointer;
        }
        .btn-save:hover { background-color: #82d4f8; }
    </style>
</head>
<body>
    <div class="app-card">
        <div class="top-nav">
            <a href="view_addmember.php">Employee</a> <span>|</span>
            <a href="view_member.php">Office</a> <span>|</span>
            <a href="view_officeemployee.php">Office-Employees</a>
        </div>
        <div class="card-body-custom">
            <h2 class="page-title">Office Employees</h2>
            <table class="custom-table mb-4">
                <thead>
                    <tr>
                        <th style="width: 50%;">Employee</th>
                        <th style="width: 50%;">Office</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($allOfficeEmployees)): ?>
                        <tr><td colspan="2" class="text-center text-muted">Belum ada data</td></tr>
                    <?php else: ?>
                        <?php foreach ($allOfficeEmployees as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars(is_object($item->Employee) ? $item->Employee->Name : $item->Employee, ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($item->Office ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <form action="controller_officeEmployee.php" method="POST">
                <div class="form-row-custom">
                    <label for="employee" class="form-label-custom">Employee</label>
                    <div class="form-input-custom">
                        <select name="employee" id="employee" class="form-control custom-select select-top" required>
                            <?php foreach ($allMembers as $index => $member): ?>
                                <option value="<?= $index ?>"><?= htmlspecialchars($member->Name ?? '', ENT_QUOTES, 'UTF-8') ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-row-custom">
                    <label for="office" class="form-label-custom">Office</label>
                    <div class="form-input-custom">
                        <select name="office" id="office" class="form-control custom-select select-bottom" required>
                            <option value="" disabled selected>Choose Office...</option>
                            <option value="UC Surabaya">UC Surabaya</option>
                            <option value="UC Makassar">UC Makassar</option>
                            <option value="UC Jakarta">UC Jakarta</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="button_save" class="btn btn-save">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>