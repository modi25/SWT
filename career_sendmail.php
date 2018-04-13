<?php


	   $fname = $_POST['fname'];
       $mobile = $_POST['mobile'];
       $email = $_POST['email'];
       $field = $_POST['field'];
$fromemail = $email;
$subject =$mobile; 
$body = "I am, $fname\r\n</b>";
$body  .= "working as,$field";
$body  .="Please find the attachment";
$strSid = md5(uniqid(time()));
$headers .="From: $fromemail" . "\r\n";
$headers .="MIME-Version: 1.0\n";
$headers .="Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n"; 
$headers .="--".$strSid."\n";  
$headers .="Content-type: text/html; charset=utf-8\n";  
$headers .="Content-Transfer-Encoding: 7bit\n\n";  
$headers .=$body."\n\n";
if($_FILES["file"]["name"]!= ""){  
 $strFilesName = $_FILES["file"]["name"];  
 $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
 $headers .= "--".$strSid."\n";  
 $headers .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";  
 $headers .= "Content-Transfer-Encoding: base64\n";  
 $headers .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";  
 $headers .= $strContent."\n\n";  
}
$toemail="ashwanimodi.25@gmail.com"; 
if(mail($toemail, $subject, $body, $headers))
   echo "Email send successfully with attachment";