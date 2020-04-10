<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passengers</title>
    <?php require("includes/header.php");?>
  </head>
  <body>
  <?php
    require("includes/connect.php");
    require("includes/navbarphp");
  ?>
<br><br><br>
  <div class="container">
    <div class="card" style="width:100%;">
      <div class="card-body">
        <h5 class="card-title">Passengers</h5>

        <a href="newPassengerForm.php" class="btn btn-success">Create New</a>
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Passenger Id</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Contact No</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $sql = "select * from passenger";
              $result = $conn->query($sql);

              while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['passenger_id']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['address']."</td><td>".$row['age']."</td><td>".$row['contact_no']."</td></tr>";
              }
           ?>
        </tbody>
        </table>

      </div>
    </div>
  </div>

  <?php require("includes/footer.php");?>
  </body>
</html>
