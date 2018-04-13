<?php

       $fname = $_POST['fname'];
       $mobile = $_POST['mobile'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];

         $to = "info@twstechnology.com"; //info@twstechnology.com
         $subject = $mobile;
         
         $message = "Hello, $fname\r\n</b>";
         $message .= $msg;
         $message .="Your Thankfully </br> $fname";
         
         $header = "From:$email \r\n";
         $header .= "Cc: \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           header('Location:contact-us.php?success=true');
         }else {
           header('Location:contact-us.php?failure=true');
         }
   ?>