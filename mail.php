<?php
    $to = 'info@opulentvision.ae';
    $email_subject = "Email From Website";

    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $date= $_POST["date"];
    $location= $_POST["location"];
    $text= $_POST["message"];
    $selectOption = $_POST['taskOption'];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>'.$email_subject.'</td></tr>
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Project Date: '.$date.'</td></tr>
        <tr><td>Location: '.$location.'</td></tr>
        <tr><td>How Did You Hear About Us?: '.$selectOption.'</td></tr>
        <tr><td>Message: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }


?>
