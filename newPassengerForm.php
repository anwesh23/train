<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Passenger Form</title>
    <?php require("includes/header.php");?>
</head>
<body>
    <?php require("includes/navbar.php");?>

    <div class="container">
        <form action="newPassenger.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
        </div>
        <div class="form-group">
            <label for="contact_no">Contact Number</label>
            <input type="text" class="form-control" id="contact_no" placeholder="Enter contact_no" name="contact_no">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <?php require("includes/footer.php"); ?>
</body>
</html>