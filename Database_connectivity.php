<?php

// Establishing connection to Qronos Databases

// Uncomment This while publishing
/*
if(!($qronos_database_connection = mysqli_connect("mysql5.000webhost.com","a5156746_root","149n9sqwe"))){
	die("Sorry , for the inconvinience . This page is under construction ! </body></html>");
}
*/
//Uncomment This while using locally

if(!($qronos_database_connection = new mysqli("localhost","root","password","a5156746_1"))){
	die("Sorry , for the inconvinience . This page is under construction ! 1</body></html>");
}


// Opening QronosStudio Database  
if(!(mysqli_select_db($qronos_database_connection,"a5156746_1"))){
	die("Sorry , for the inconvinience . This page is under construction ! 2</body></html>");        
}

// Function that inserts into the given table in the QronosStudio Database
function insert_qronosstudio ($qronos_database_connection,$table_name,$query){
	if(!(mysqli_query($qronos_database_connection,$query))){
		die("Sorry , for the inconvinience . This page is under construction ! 3</body></html>");       		
	}
	mysqli_close($qronos_database_connection);
}

// Function that queries the given table in the QronosStudio Database
function select_qronosstudio ($qronos_database_connection,$table_name,$query){
	if(!($result = $qronos_database_connection->query($query))){
		die("Sorry , for the inconvinience . This page is under construction ! 4</body></html>");       		
	}
	return $result;
}


?>