<?php
    
    function verify_login($result,$password){
        if($row = mysqli_fetch_row($result)){
        foreach($row as $key => $value){
            if(!($value===$password)){
                die('Wrong Password');
            }
        }
        }
        else{
            setcookie("HasRegistered","false",time()+60*24*24);
            header("Location: Register.php");
            return 'false';
        }
        return 'Login Success';
    }

?>