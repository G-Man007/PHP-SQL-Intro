<?php
 $mysqli = new mysqli("mysql.eecs.ku.edu", "g913s551", "sahCu4Ae", "g913s551");
 /* check connection */
 if ($mysqli->connect_errno) {
     printf("Connection failed: %s\n", $mysqli->connect_error);
     exit();
 }
 
 echo "<head><title>View Users</title>";
 echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";
 $whereToSelect = "SELECT * FROM Users";
 $selection = mysqli_query($mysqli, $whereToSelect);

 echo "<table>";
 while($user = mysqli_fetch_array($selection)){
  echo "<tr>"; echo "<td>";
      echo $user['user_id'];
    echo "</td>";
    echo "</br>";
  echo "</tr>";
  }
  echo "</table>";
  $mysqli->close($mysqli);
?>
