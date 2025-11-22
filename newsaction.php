<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["sent"]))
{
$mail = $_POST["mail"];

   
            $bodyContent = "Dear Thank you argo assist 
                                                       The Agro Assist project simplifies how landowners connect with farming professionals by replacing traditional, inefficient labour management methods with a faster, more transparent online system. 
            It helps landowners easily find skilled workers, communicate directly, and manage work schedules and payments efficiently.
           By offering features like location-based worker availability, service-based booking, and a review system, Agro Assist builds trust and ensures quality work. It benefits both farmers and landowners—farmers get more job opportunities, while landowners receive timely, reliable services.
             Overall, Agro Assist aims to modernize agriculture, promote fair employment, and improve productivity through digital innovation.
             
                   Thank you, 
                   Team Agro Assist
                   For contact us
                   Mobile:+91 8875651423";
            $mailtoaddress = $mail;
            require('phpmailer2.php');
              echo "<script>alert('Thank you for your response'); window.location='index.php'</script>";
              
}