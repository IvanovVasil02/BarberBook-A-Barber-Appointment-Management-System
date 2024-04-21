<?php 
    $emailTo = "ivanov.vasil235@gmail.com";
    $subject = "questo è un test";
    $body = "questo è il body";
    $headers = "From: vascoabc6@gmail.com";

    if( mail($emailTo, $subject, $body, $headers)){
        echo "email inviata";
    }else{
        echo "email non iviata";
    }       

?>