<?php
 $choice = $_POST['options'];
 $mysqli = new mysqli("mysql.eecs.ku.edu", "g913s551", "sahCu4Ae", "g913s551");
 /* check connection */
 if ($mysqli->connect_errno) {
     printf("Connection failed: %s\n", $mysqli->connect_error);
     exit();
 }

 echo "<head><title>View User Posts</title>";
 echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";
 /*makes sure user has posted before*/
 $thePost = mysqli_query($mysqli, "SELECT (content) FROM Posts WHERE author_id='$choice'");
 if(mysqli_num_rows($thePost) == 0){
   echo "No posts have been made by this user at this time";
 }
 /*inserting user info into a darn good looking table*/
 else{
   echo "<table>";
   echo "<tr>" . "<th>" . $choice . "</th>" . "</tr>";
   while($thinking = mysqli_fetch_array($thePost)){
    echo "<tr>";
      echo "<td>";
        echo $thinking['content'];
      echo "</td>";
      echo "</br>";
    echo "</tr>";
    }
  }
  $mysqli->close($mysqli);
?>
