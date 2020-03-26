<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Train</title>
    <?php require("header.php");?>
  </head>
  <body>
  <?php
    require("connect.php");
    require("navbar.php");
  ?>
<br><br><br>
  <div class="container">
    <div class="card" style="width:100%;">
      <div class="card-body">
        <h5 class="card-title">Trains</h5>

        <table class="table">
          <thead>
          <tr>
            <th scope="col">Train ID</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $sql = "select * from train";
              $result = $conn->query($sql);

              while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['train_id']."</td><td>".$row['origin']."</td><td>".$row['destination']."</td></tr>";
              }
           ?>
        </tbody>
        </table>

      </div>
    </div>
  </div>

  <?php require("footer.php");?>
  </body>
</html>
