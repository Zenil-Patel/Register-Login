<?php  
    $username=$_POST["textuser"]; 
    $email=$_POST["textemail"]; 
    $password=$_POST["password"]; 
    $insertquery = "insert into user_info values('$username', '$email', '$password')"; 
 
 $con = mysqli_connect("localhost", "root", "", "practical14"); 
 if (!$con) 
 { 
    die("Connot connect to Database : " . mysqli_connect_error()); 
 } 
 else 
 { 
    if(!mysqli_query($con, $insertquery)) 
    { 
         echo "<b>Unable to register a new user.</b>"; 
    } 
    else 
    { 
        echo "<b>Registration successful. Goto <a href='Login.html'>Login</a> page.</b>"; 
    } 
    mysqli_close($con); 
 } 
?>
