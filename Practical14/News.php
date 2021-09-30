<?php 
 session_start(); 
 $con = mysqli_connect("localhost", "root", "", "practical14"); 
 if (!$con) 
 { 
 die("Error : Connot connect to Database."); 
 } 
 else 
 { 
 if(isset($_SESSION["Username"])) 
 { 
 
 $query = "select * from news"; 
 if($result = mysqli_query($con, $query)) 
 { 
 
 if(mysqli_num_rows($result) > 0) 
 { 
 
 echo "<center><h3>News</h3></center>"; 
 while($row = mysqli_fetch_array($result)) 
 { 
 
 
 echo "<p>"; 
 echo "⁕ &nbsp".$row['Sr. no.']; 
 echo "⁕ &nbsp".$row['Headline']; 
 echo "</p>"; 
 echo "<hr>"; 
 } 
 } 
 } 
 else 
 { 
 echo "Unable to execute query."; 
 } 
 
 mysqli_close($con); 
 } 
} 
?> 
