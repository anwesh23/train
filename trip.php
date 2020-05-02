<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trip</title>
    <?php require("includes/header.php");?>
  </head>
  <body>
  <?php
    require("includes/connect.php");
    require("includes/navbar.php");
  ?>
<br><br><br>
  <div class="container">
    <div class="card" style="width:100%;">
      <div class="card-body">
        <h5 class="card-title">Trip</h5>

        <a href="newTripForm.php" class="btn btn-success">Create New</a>
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Trip Id</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Passenger Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $sql = "select tri.trip_id, tra.train_id, tra.origin, tra.destination,p.passenger_id, p.name from trip tri, train tra, passenger p where tri.train_id = tra.train_id and tri.passenger_id = p.passenger_id";
              $result = $conn->query($sql);

              while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['trip_id']."</td><td>".$row['origin']."</td><td>".$row['destination']."</td><td>".$row['name']."</td></tr>";
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