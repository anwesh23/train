 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Trip Form</title>
    <?php require("includes/header.php");?>
</head>
<body>
    <?php require("includes/navbar.php");?>
    <?php require("includes/connect.php");?>

    <div class="container">
        <form action="newTrip.php" method="post">
        <div class="form-group">
            <label for="train">Train</label>
            <select class="form-control" id="train" placeholder="Enter train" name="train">
                <?php 
                    $sql = "select train_id, origin, destination from train";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo "<option value=".$row['train_id'].">".$row['origin']."->".$row['destination']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="passenger">Passenger</label>
            <select class="form-control" id="passenger" placeholder="Enter passenger" name="passenger">
                <?php 
                    $sql = "select passenger_id, name from passenger";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo "<option value=".$row['passenger_id'].">".$row['name']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control datepicker" id="date" placeholder="Enter date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <?php require("includes/footer.php"); ?>
</body>
</html>