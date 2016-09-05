<?php
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 
  $contactname=$_POST['contactname'];

  $contactemail=$_POST['contactemail'];
  $contactmessage=$_POST['contactmessage'];

 /*  echo $emailadmin;*/
  

  $emailadmin="sales@myappranker.com";
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
        

        /*..................................................................*/
     
        $message="<style type='text/css'>

        div, p, a, li, td { -webkit-text-size-adjust:none; }

        *{
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .ReadMsgBody
        {width: 100%; background-color: #ffffff;}
        .ExternalClass
        {width: 100%; background-color: #ffffff;}
        body{width: 100%; height: 100%; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
        html{ background-color: #e6e4db;width: 100%; }

        @font-face {font-family: 'proxima_novalight';src: url('http://rocketway.net/themebuilder/products/font/proximanova-light-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-light-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-light-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-light-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_nova_rgregular'; src: url('http://rocketway.net/themebuilder/products/font/proximanova-regular-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-regular-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-regular-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-regular-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_novasemibold';src: url('http://rocketway.net/themebuilder/products/font/proximanova-semibold-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-semibold-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-semibold-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-semibold-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_nova_rgbold';src: url('http://rocketway.net/themebuilder/products/font/proximanova-bold-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-bold-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-bold-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-bold-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_novathin';src: url('http://rocketway.net/themebuilder/products/font/proximanova-thin-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-thin-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-thin-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-thin-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_novablack';src: url('http://rocketway.net/themebuilder/products/font/proximanova-black-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-black-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-black-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-black-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

        @font-face {font-family: 'proxima_novaextrabold';src: url('http://rocketway.net/themebuilder/products/font/proximanova-extrabold-webfont.eot');src: url('http://rocketway.net/themebuilder/products/font/proximanova-extrabold-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/products/font/proximanova-extrabold-webfont.woff2') format('woff2'),url('http://rocketway.net/themebuilder/products/font/proximanova-extrabold-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/products/font/proximanova-extrabold-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}


        p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }

        .hover:hover {opacity:0.85;filter:alpha(opacity=85); }


        .jump:hover {
            opacity:0.75;
            filter:alpha(opacity=75);
            padding-top: 10px!important;}

        .image475 img {width: 475px; height: auto;}
        .image250 img {width: 250px; height: auto;}
        .logo img {width: 125px; height: auto;}


    </style>
    <style type="text/css"> @media only screen and (max-width: 640px){
        body{width:auto!important;}
        table[class=full] {width: 100%!important; clear: both; }
        table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
        table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
        td[class=image475] img {width: 100%!important; text-align: center!important; clear: both; }
        td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
        *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
        *[class=erase] {display: none;}
    } </style>
    <style type="text/css"> @media only screen and (max-width: 479px){
        body{width:auto!important;}
        table[class=full] {width: 100%!important; clear: both; }
        table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
        table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
        td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
        td[class=image475] img {width: 100%!important; text-align: center!important; clear: both; }
        *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
        *[class=erase] {display: none;}

    }
    } </style></head><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix">

<div class="ui-sortable" id="sort_them">
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td width="100%" valign="top" align="center">


                
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile"><tbody><tr><td align="center">

                            
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="60"></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


               
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile"><tbody><tr style="border-color: #ff0072;"><td width="475" align="center" style="border-color: #ff0072;">

                            
                            <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#71a42e" style="border-top-left-radius: 4px;border-top-right-radius: 4px;border-color: #ff0072;background-color: #252830;"><tbody><tr><td width="100%" height="10"></td>
                                </tr><tr><td width="475" valign="middle" class="logo" align="center">

                                    
                                        <table width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full"><tbody><tr><td width="100%" height="1" style="font-size: 1px; line-height: 1px;"> </td>
                                            </tr></tbody></table><table width="125" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td height="50" valign="middle" width="100%" style="text-align: left;" class="fullCenter">
                                                    <a href="http://www.imzolo.com/#/home" cu-identify="element_05265700270881215"><img width="125" src="http://myappranker.com/images/logo.png" alt="" border="0" class="hover" cu-identify="element_011756044608994021"></a>
                                                </td>
                                            </tr></tbody></table><table width="40" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full"><tbody><tr><td width="100%" height="1"></td>
                                            </tr></tbody></table><table width="1" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full"><tbody><tr><td width="100%" height="10" class="erase"></td>
                                            </tr></tbody></table></td>
                                </tr><tr><td width="100%" height="10"></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


               
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" style="background-image: url('https://s3-ap-southeast-1.amazonaws.com/zolo/zolo_category_images/weddingbanners/wedding-mail-banner.jpg');background-color: rgba(211,211,211,1);background-size: cover;background-position: center center;background-repeat: no-repeat;" id="BGheaderChange"><tbody><tr><td width="475" align="center">

                           
                            <div>

                               
                            </div>
                        </td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


             
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"><tbody><tr><td width="475" align="center">

                           
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="15"></td>
                                </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="475" valign="middle" align="center">

                                       
                                        <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left;font-family: Helvetica, Arial, sans-serif;font-size: 18px;color: #232323;line-height: 18px;font-weight: bold;" class="fullCenter">
                                                  <span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><p cu-identify="element_08212225270751117">Hi Manish,
                                            </p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


               
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"><tbody><tr><td width="475" align="center">

                            
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="10"></td>
                                </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="475" valign="middle" align="center">

                                       
                                        <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left; font-family: Helvetica, Arial, sans-serif;
           font-size: 15px; color: rgb(151, 151, 151); line-height: 24px;" class="fullCenter">
                                                    <span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><p cu-identify="element_09201169670319083">Thanks for stopping by on MyAppRanker and we hope to help you the best way we can :)
                                            </p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


               
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"><tbody><tr><td width="475" align="center">

                          
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="10"></td>
                                </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="475" valign="middle" align="center">

                                       
                                        <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #979797; line-height: 24px; font-weight: normal;" class="fullCenter">
                                                  <span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
                                                    <p></p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table><table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="100%" height="10"></td>
                                            </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #979797; line-height: 24px; font-weight: normal;" class="fullCenter">
                                                    <span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
                                                    <p></p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #979797; line-height: 24px; font-weight: normal;" class="fullCenter">
                                                   <span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><p cu-identify="element_0949466731107284">Your query is important to us, one of our experts will get back to you shortly. 
 </p>
                                                    <p></p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter"><tbody><tr><td width="40"></td>
                                                <td valign="middle" width="395" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #979797; line-height: 24px; font-weight: normal;" class="fullCenter">
                                                    <span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><div><br></div><div style="font-weight: 600">Wish You a Great Day</div><div style="font-weight: 600">Team MyAppRanker</div><p>
                                            </p></span></td>
                                                <td width="40"></td>
                                            </tr></tbody></table></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


              
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"><tbody><tr><td width="475" align="center">

                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="17"></td>
                                </tr></tbody></table><table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="40" class="erase"></td>
                                    <td width="395" valign="middle" align="center">



                                    </td>
                                    <td width="40" class="erase"></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td bgcolor="#e6e4db" align="center" style="background-color: rgb(230, 228, 219);">


              
                <table width="475" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; background-color: rgb(255, 255, 255);"><tbody><tr><td width="475" align="center">

                          
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"><tbody><tr><td width="100%" height="35"></td>
                                </tr></tbody></table></td>
                    </tr></tbody></table></td>
        </tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#f3f3f3" object="drag-module-small" style="background-color: rgb(211, 211, 211);"><tbody><tr></tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#f3f3f3" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; background-color: rgb(211, 211, 211);" object="drag-module-small" cu-identifier="element_008109183163040079"><tbody><tr></tr></tbody></table><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#e6e4db" style="background-color: rgb(230, 228, 219);"><tbody><tr><td width="100%" valign="top" align="center">


             
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile"><tbody><tr><td align="center">


                        </td>
                    </tr></tbody></table></td>
        </tr></tbody></table></div>
<style>body{ background: none !important; } </style></body></html>


        ";



         /*.........................................................................*/





       if(){
            echo "ok";
       }else{


              echo "ok";
       }


             /*  header('Location:'.'http://myappranker.com/thankyou.html');*/



         

      

    }

    else{
    

      /*  header('Location:'.'http://myappranker.com/thankyou.html');*/
           echo "ok";

    }



  }

  else{
   
   /*  header('Location:'.'http://myappranker.com/');*/
        echo "no";

  }


}
?>