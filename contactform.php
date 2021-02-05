<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = "kumsingh78@gmail.com";
  $mailTo = $_POST['email'];

  $headers = "Hello, ".$name."\n\n"."Thank You For Visiting My Website";
  $message = "Hi There";
  $subject = "New Message From Fake COMME des GARÇONS";


  mail($mailTo, $subject, $message, $headers);
  header("Location: index.php?mailsend");
}

?>