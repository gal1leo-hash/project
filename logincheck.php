<?php
$link = mysqli_connect("localhost", "root", "", "Minor");
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    // Escape user inputs for security
    $user1 = mysqli_real_escape_string($link, $_REQUEST['user1']);
	
    $pass1 = mysqli_real_escape_string($link, $_REQUEST['pass1']);

     // attempt insert query execution

    $dologin = "SELECT user, pass FROM signup WHERE user='$user1' AND pass='$pass1'";
$result=$link->query($dologin);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) 
	{
		header("Location: finaltest.html");
    }

	}
else {
    echo "Invalid Username and Password missmatch";
}
$link->close();


?>