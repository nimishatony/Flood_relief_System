


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
   	$name=$_POST["t1"];
	   $district=$_POST["t2"];
	   $gender=$_POST["t3"];
	   $age=$_POST["t4"];
	   $phn_number=$_POST["t5"];
	   $email=$_POST["t6"];
	   $check=implode(',', $_POST['ch']);
	
   	$sql = "insert into registration values('$name','$district','$gender','$age','$phn_number','$email','$check')";
      
   	$result = mysqli_query( $conn, $sql);
   
   	if(!$result ) {
      		die('Could not enter data: ' .mysqli_error($conn));
   	}
   	
   	echo "Entered data successfully\n";
   

   }
	
   	mysqli_close($conn);
?>