<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db="College";

   $conn = mysqli_connect($host, $user, $pass,$db);
   
   	if(! $conn ) {
      		die('Could not connect: ' . mysqli_error($conn));
   	}
	$sql = "SELECT * FROM Student";
	$result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
                echo $row[0] ;
                echo $row[1] ;
                echo $row[2] ;
                echo $row[3] . "<br>";
        }
       mysqli_close($conn);
?>