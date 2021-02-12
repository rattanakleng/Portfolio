<?php

if (isset ($_POST['submit'])) {

    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];
    
    // $email_from = "lengrattanak@live.com";
    
    // $email_subject = "New Form Submission";
    
    // $email_body = "User Name: $name.\n".
    //                 "User Email: $visitor_email.\n".
    //                     "Email Subject: $subject. \n".
    //                         "User Message: $message.\n";
    
    $mailTo = "rleng@live.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have receive an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: index.php?mailsend");
}


?>
