<?php
    //status variable
    //$status = 0;
    //$con = new mysqli('localhost', 'es1103_gp_User', '@1p%t932#E+_', 'es1103_GP_Database');
    $con = new mysqli('localhost', 'an546_180', 'banana180*', 'an546_ono');
   
   
    $username = $_POST['name'];
    $pass = $_POST['password'];
   

    if($con->connect_error == null)
    {  
       
        $username = $con->real_escape_string($username);
        $pass = $con->real_escape_string($pass);
       

        $passCheckQuery = ("SELECT uPassword FROM tUsers WHERE username='$username'");
        $passCheck = $con->query($passCheckQuery);
        //($passCheck == '$pass')
        if($passCheck == '$pass')
            {
                //$status = 1;
                //http_response_code($status);
               
                var_dump(http_response_code(1));
                //exit();
            }
       

        //something is going wrong here, presumably, maybe its the same as whatever is causing the weird blue names?- Fixed
        else{    //Nothing;
        }}
   
?>
