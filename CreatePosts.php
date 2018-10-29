<?php
$userName = $_POST["user"];
$text = $_POST["post"];
$select = "SELECT user_id FROM Users WHERE user_id = '$userName'";
$insert = "INSERT INTO Posts(content, author_id) VALUES ('$text', '$userName')";

$mysqli = new mysqli("mysql.eecs.ku.edu", "g913s551", "sahCu4Ae", "g913s551");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<head><title>Create Post</title>";
echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";

$check = mysqli_query($mysqli, $select);
if(mysqli_num_rows($check) == 0){
  echo "User '" . $userName . "' is not registered in our database";
  exit(0);
}
else if($text == 'null' || $userName == 'null' || ){
  echo "One or more fields are empty";
}
else{
  $query = mysqli_query($mysqli, $insert);
  echo "User '" . $userName . "' post was added";
}

/* close connection */
$mysqli->close($mysqli);
?>
