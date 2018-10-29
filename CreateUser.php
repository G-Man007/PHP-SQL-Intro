<?php
$addUser = $_POST["user"];
$select = "SELECT user_id FROM Users WHERE user_id = '$addUser'";
$insert = "INSERT INTO Users (user_id) VALUES ('$addUser')";

$mysqli = new mysqli("mysql.eecs.ku.edu", "g913s551", "sahCu4Ae", "g913s551");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<head><title>Create User</title>";
echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";
/*Makes sure username is valid*/
$check = mysqli_query($mysqli, $select);
if(mysqli_num_rows($check) != 0){
  echo "User '" . $user . "' already exists within our database";
  exit(0);
}
else if($AddUser == 'null'){
  echo "Must enter text for the username";
}
else{
  $query = mysqli_query($mysqli, $insert);
  echo "User '" . $addUser . "' was successfully added our database";
}

/* close connection */
$mysqli->close($mysqli);
?>
