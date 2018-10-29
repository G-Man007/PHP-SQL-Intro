<?php
 $mysqli = new mysqli("mysql.eecs.ku.edu", "g913s551", "sahCu4Ae", "g913s551");
 /* check connection */
 if ($mysqli->connect_errno) {
     printf("Connection failed: %s\n", $mysqli->connect_error);
     exit();
 }
 echo "<head><title>Delete Post</title>";
 echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";
 /*removes all items user checked to delete*/
foreach($_POST['removal_array'] as $cut){

                $delete_post = "DELETE FROM Posts WHERE post_id=$cut";
                if ($mysqli->query($delete_post) === TRUE) {
                    echo "Post '" . $cut . "' was removed as requested. <br> ";
                }
                else {
                    echo "Error post: '" . $cut . "' could not be removed at this time.<br>";
                }
             }
  $mysqli->close($mysqli);
?>
