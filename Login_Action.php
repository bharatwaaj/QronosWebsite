<!-- Login with Database -->
<?php        
    
    include 'Database_connectivity.php';
    include 'Login_verification.php';
    $email_id = $_POST["email"];
    $password = $_POST["password"];
    $table_name = "Register";
    $query = "SELECT password FROM Register WHERE email_id = '$email_id'";
    $result = select_qronosstudio($qronos_database_connection,$table_name,$query);
    $placeholder_result = verify_login($result,$password);
    if($placeholder_result==='Login Success'){
        setcookie("LoginState","true",time()+60*60*24);
        setcookie("Username",$email_id,time()+60*60*24);
        header("Location: index.php");
    }elseif($placeholder_result==='Login Success'){

    }
?>      