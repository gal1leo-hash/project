

    <?php

    $link = mysqli_connect("localhost", "root", "", "Minor");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $username = mysqli_real_escape_string($link, $_REQUEST['user']);
	
    $password = mysqli_real_escape_string($link, $_REQUEST['pass']);

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);

     

    // attempt insert query execution

    $sql = "INSERT INTO signup (name, email, user, pass) VALUES ('$name', '$email', '$username', '$password')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>

