<?php

if (isset($_POST['send123'])){
    $text = $_POST['text'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $description = $_POST['description'];
        

    // text validation
    if(empty($text)){
        $errorName = "Please enter your name here."; 
    }else{
        $corrName = $text;
    }

    // email validation
    if(empty($email)){
        $errorEmail = "Please enter your email.";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = "Please enter a valid email address.";
    }else{
        $corrEmail = $email;
    }

    //  mobile number validaiton
    if(empty($number)){
        $errorNumber = "Please enter your mobile number.";
    }elseif(!preg_match('/^[0-9]{11}+$/', $number)){
        $errorNumber = "Invalid Mobile number";
    }else{
        $corrNumber = $number;
    }

    // description validation
    if(empty($description)){
        $errorDesciption = "Please text something.";
    }else{
        $corrDescription = $description;
    }

    if(isset($corrName) && isset($corrEmail) && isset($corrNumber) && isset($corrDescription)){

        $to = "ashraf.uzzaman04082004@gmail.com";
        $header = "From: $corrName";
        $subject = "My identity";
        $body = "";

        $body .= "Form: " . $corrName  . "\r\n";
        $body .= "Email: " . $to . "\r\n";
        $body .= "Mobile: " . $corrNumber . "\r\n";
        $body .= "Message: " . $corrDescription . "\r\n";

        if(mail($to, $subject, $body, $header)){
            echo "<script>alert('Successfully send your message.')</script>";

            $text = $email = $number = $description = "";

            $messageSend = true;
        }else{
            echo "<script>alert('Something went wrong')</script>";

            $messageSend = false;
        }
        
    }
}

?>