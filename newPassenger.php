<?php
    require("includes/connect.php");
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $contact_no = $_POST['contact_no'];

    $sql = "INSERT INTO PASSENGER (name,gender,address,age,contact_no) VALUES('$name','$gender','$address','$age','$contact_no')";
    
    if($conn->query($sql) === TRUE){
        header("Location: passengerdx.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>