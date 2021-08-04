<?php


//echo "<pre>";
//Print_r($_POST);
//die();


$name= $_POST['first_name'];
$lname= $_POST['last_name'];
//$companyname= $_POST['companyname'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['phone'];
$mailto="$email";



// $message = "The body of the message";
// $message = wordwrap($message, 70, "\r\n");
// $headers = 'From: register@mrgarretto.com' . "\r\n" .
// 'Reply-To: register@mrgarretto.com' . "\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// $mailResult = mail($email, 'Insert a subject here', $message, $headers);



//$headers = "From: $name <$email>\r\n";

$headers = 'From: projects@proceziodevp.com' . "\r\n" .
'Reply-To: projects@proceziodevp.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1';

$check = mail($mailto,"from Bootstart Website",
"Hi, $name $lname <br/> 
<img src='https://bootstart.in/Emailer.jpg' alt='' style='width: 100%; height: auto;' /> <br/> 
Thank you for showing interest in Bootstart CoWork. <br/> We will get back to you soon.
   <br/><br/>  ",$headers);
    //echo("Your message has been sent. Thank you!");;
    if($check){
          echo
          "<script type=\"text/javascript\">".
          "window.alert('Your Email is sent successfully. We will get back to you very soon!');".
          "top.location = 'thank-you.html';".
          "</script>";
         }
        else{
          echo
          "<script type=\"text/javascript\">".
          "window.alert('Sorry for your email not send!!!!');".
          "top.location = 'thank-you.html';".
          "</script>";
        }
?>