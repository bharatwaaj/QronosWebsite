<!-- Register to Database -->
<?php        
    
    include 'Database_connectivity.php';
    $email_id = $_POST["email"];
    $password = $_POST["password"];
    $mail_subject = "Hey , Thanks for Registering !";
    $mail_body = "Hi there, '\n' Thanks for joining us. '\n' Regards, '\n' Qronos.";
    $mail_headers = "From: Qronos <cofounders@qronos.comuf.com>";
    $table_name = "Register";
    $query="INSERT INTO Register (email_id,password) VALUES ('$email_id','$password')";
    insert_qronosstudio($qronos_database_connection,$table_name,$query);
    if(mail($email_id, $mail_subject, $mail_body, $mail_headers)){
        echo 'mail sent !';
    }
    // TODO
    //echo 'Sorry , for the inconvinience . This page is under construction ! </body></html>';
    header("Location: Login.php");

?>      