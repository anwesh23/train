<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Train Form</title>
    <?php require("includes/header.php");?>
</head>
<body>
    <?php require("includes/navbar.php");?>

    <div class="container">
        <form action="newTrain.php" method="post">
        <div class="form-group">
            <label for="origin">Origin</label>
            <input type="text" class="form-control" id="origin" placeholder="Enter origin" name="origin">
        </div>
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" class="form-control" id="destination" placeholder="Enter destination" name="destination">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <?php require("includes/footer.php"); ?>
</body>
</html>