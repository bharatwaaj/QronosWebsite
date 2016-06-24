  <?php

	include 'Database_connectivity.php';
	$email_id = $_POST['email'];
	$table_name = "Register";
	$query = "SELECT email_id FROM Register WHERE email_id = '$email_id'";
	$result = select_qronosstudio($qronos_database_connection,$table_name,$query);
    	if(!($row = mysqli_fetch_row($result))){
  		header("Location: Register.php");
  		}
 ?>