<?php
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 
  $contactname=$_POST['name'];

  $contactemail=$_POST['email'];
  $contactmessage=$_POST['message'];

 /*  echo $emailadmin;*/
  

  $emailadmin="sells@myappranker.com";
  $forwordEmail="myappranker@gmail.com";

  $subject = "Contact Us.";
  $message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$contactname.'<br> Email:-'.$contactemail.'<br>Message:-'.$contactmessage.'</div>


</body>
</html>';





 
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers = "From:sudo@scaledesk.com\r\n";
  $headers = "Content-type: text/html;charset=iso-8859-1" . "\r\n";

  if(mail($emailadmin,$subject,$message,$headers))

  {

    if(mail($forwordEmail,$subject,$message,$headers)){

     
               header('Location:'.'http://myappranker.com/thankyou.html');

      

    }

    else{
    

        header('Location:'.'http://myappranker.com/thankyou.html');

    }



  }

  else{
   
     header('Location:'.'http://myappranker.com/');

  }


}
?>