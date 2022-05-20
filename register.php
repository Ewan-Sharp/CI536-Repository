<?php
    //$con = new mysqli('localhost', 'es1103_gp_User', '@1p%t932#E+_', 'es1103_GP_Database');
    $con = new mysqli('localhost', 'an546_180', 'banana180*', 'an546_ono');

   
    $username = $_POST['name'];
    $pass = $_POST['password'];
    $dateOfBirth = $_POST['dob'];

    if($con->connect_error == null)
    {  
       
        $username = $con->real_escape_string($username);
        $pass = $con->real_escape_string($pass);
        $dateOfBirth = $con->real_escape_string($dateOfBirth);

        $nameCheckQuery = ("SELECT username FROM tUsers WHERE username='$username'");
        $nameCheck = $con->query($nameCheckQuery);
       
        if(mysqli_num_rows($nameCheck) > 0)
            {
                echo "1: Name Exists";
                exit();
            }
        }

        //something is going wrong here, presumably, maybe its the same as whatever is causing the weird blue names?- Fixed
        else{    $insertUserQuery = ("INSERT INTO tUsers(username, uPassword, dob) VALUES ('$username', '$pass', '$dateOfBirth')"); //Fixed
       
        $success = $con->query($insertUserQuery);
        if($success){
            $id = $con->insert_id;}
        }
   
?>