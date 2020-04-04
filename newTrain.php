<?php
    require("includes/connect.php");
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];

    $sql = "INSERT INTO TRAIN (origin,destination) VALUES('$origin','$destination')";
    
    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>