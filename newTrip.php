 <?php
    require("includes/connect.php");
    $train_id = $_POST['train'];
    $passenger_id = $_POST['passenger'];
    $date = $_POST['date'];

    $sql = "INSERT INTO TRIP (train_id,passenger_id,date) VALUES('$train_id','$passenger_id',$date)";
    
    if($conn->query($sql) === TRUE){
        header("Location: trip.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>