<?php

if(isset($_POST['con_name']) && isset($_POST['con_email']) && isset($_POST['con_message'])){
  $con_name = $_POST['con_name'];
  $con_email = $_POST['con_email'];
  $con_message = $_POST['con_message'];

  if($con_name != '' && $con_email != '' && $con_message != ''){

    $to = 'lucien.burdet@gmail.com';
    $subject = 'Lucien Burdet - lucien-brd.com';

    $message = '<strong>Nom : </strong>'.$con_name.'<br/><br/>';

    $message .= $con_message.'<br/>';


    $headers = 'From: '.$con_name.' '.$con_email . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    mail($to,$subject,$message,$headers);
    header('location: ../?mail=true#contact');
  } else {
    header('location: ../?mail=false#contact');
  }
}
require_once(PATH_VIEWS.'accueil.php');
