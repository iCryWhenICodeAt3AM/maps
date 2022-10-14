<?php 
    require_once 'php/connector.php';

    $locations = array();
    $sql = "SELECT * FROM coordinates";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>latitude: ".$row['latitude']."<br>longitude: ".$row['longitude']."<br>description: ".$row['description']."<br>";
            array_push($locations, array($row['latitude'],$row['longitude'],$row['description']));
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      foreach ($locations as $key => $value) {
          echo "<br>";
          foreach ($value as $key => $value) {
            echo "value: ".$value." key: ".$key."<br>";
          }
         
      }
      $json = json_encode($locations);
      echo $json;
?>