<?php 
    $username=$_POST["textuser"]; 
    $password=$_POST["password"];  
    $query = "select * from user_info where Username = '$username' and Password = '$password'"; 
    $con = mysqli_connect("localhost", "root", "", "practical14"); 
    if (!$con) 
    { 
        die("Error : Connot connect to Database."); 
    } 
    else 
    { 
        if($result = mysqli_query($con, $query)) 
        { 
            if(mysqli_num_rows($result) > 0) 
            { 
                session_start(); 
                while($row = mysqli_fetch_array($result)) 
                { 
                    $_SESSION["Username"]=$username; 
                    echo "Welcome, <b>" .$_SESSION['Username'] . "</b><br/>"; 
                    echo "Goto <a href='Home.html'>Home page</a> Page."; 
                } 
            } 
            else 
            { 
                echo "<b>Invalid Credentials.</b><br/>"; 
            } 
        } 
        else 
        { 
        echo "<b>Unable to execute Query.</b><br/>"; 
        } 
        mysqli_close($con); 
    } 
?>
