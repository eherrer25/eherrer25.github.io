<?php
  if(isset($_POST['submit'])){
      $to = "contacto@dermasga.com";
      $from = $_POST['email'];
      $first_name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = $first_name . " escribió:" . "\n\n" . $_POST['message'];

      $headers = "From:" . $from;
      mail($to,$subject,$message,$headers);

      echo "OK";
  }
?>
