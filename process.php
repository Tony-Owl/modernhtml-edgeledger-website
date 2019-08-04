<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "ceo@edgeledger.net";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    //Redirect the user to the submission success page
    header('Location: http://edgeledger.net/success.html');
  }

  // This script template was available on inmotion webhosting.