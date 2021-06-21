<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db="flood Relief";
   $conn = mysqli_connect($host, $user, $pass,$db);
   
   	if(! $conn ) {
      		die('Could not connect: ' . mysqli_error($conn));
   	}

   if(isset($_POST["submit"]))
   {		
   	$username=$_POST["username"];
   	$password=$_POST["password"];
	
   	$sql = "insert into admin values('$username','$password')";
      
   	$result = mysqli_query( $conn, $sql);
   
   	if(!$result ) {
      		die('Could not enter data: ' .mysqli_error($conn));
   	}
   	
   	echo "Entered data successfully\n";
   

   }
	
   	mysqli_close($conn);
?>