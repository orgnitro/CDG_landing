<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = "kumsingh78@gmail.com";

  $headers = "Hello, ".$name."\n\n"."Thank You For Visiting My Website";
  $message = "Hi There";
  $subject = "New Message From Fake COMME des GARÇONS";
  
  if (empty($name) || empty($mailTo)) 
  {
    header('location: index.php?error');
  }
  else 
  {
    $to = $_POST['email'];
    
    if( mail($to, $subject, $message, $headers) ) 
    {
      header('location:index.php?success');
    }
  }
  // header("Location: index.php?mailsend");
}
else
{
  header('location:index.php');
}

?>