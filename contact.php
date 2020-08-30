<?php
    $visitoremail = $_POST['_replyto'];
    $message = $_POST['message'];
        
    $emailsubject = "Personal Website Form Submission";
    $emailbody = "Email: $visitoremail\n Message: $message";
    $to = "rohunbaxi@gmail.com";
    
    $headers = "From: $visitoremail \r\n";
    $headers = "Reply-To: $visitoremail \r\n";

    mail($to,$emailsubject,$emailbody,$headers);
    header("Location: index.html");

?>
