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
        <div class="card text-center mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addmember.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_page == 'view_member.php') ? 'active' : '' ?>" href="view_member.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_page == 'view_officeemployee.php') ? 'active' : '' ?>" href="view_officeemployee.php">Office-Employee</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
            </div>
        </div>

        <h1 class="mb-4">New Member </h1>

        <form method="POST" action="controller_member.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Example: Asep Rodrigo">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="text" class="form-control" name="age" id="inputAge" placeholder="Example: 24">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputNumber">Number</label>
                    <input type="text" class="form-control" name="number" id="inputNumber" placeholder="Example: 895-------08755">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Example: AsepRodrigo@gmail.com">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="location">
                        <option selected>Choose...</option>
                        <option value="UC Surabaya">UC Surabaya</option>
                        <option value="UC Makassar">UC Makassar</option>
                        <option value="UC Jakarta">UC Jakarta</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" id="inputCity" placeholder="Example: Surabaya">
                </div>
            </div>

            <button name="button_register" type="submit" class="btn" style="background-color: #9be0fd; color: #000; border: 1px solid #000; font-weight: 500;">Register</button>
        </form>
    </div>
</body>
</html>