<?php

if(isset($_POST['con_name']) && isset($_POST['con_email']) && isset($_POST['con_message'])){
  $con_name = htmlspecialchars($_POST['con_name']);
  $con_email = htmlspecialchars($_POST['con_email']);
  $con_message = htmlspecialchars($_POST['con_message']);

  if($con_name != '' && $con_email != '' && $con_message != ''){

    $to = 'lucien.burdet@gmail.com';
    $subject = 'Lucien Burdet - '.$con_email;

    $message = '<strong>Nom : </strong>'.$con_name.'<br/><br/>';

    $message .= '<strong>Email : </strong>'.$con_email.'<br/><br/>';

    $message .= $con_message.'<br/>';

    $header="MIME-Version: 1.0\r\n";
  	$header.='From:"LucienBrd"<no-reply@lucien-brd.com>'."\n";
  	$header.='Content-Type:text/html; charset="uft-8"'."\n";
  	$header.='Content-Transfer-Encoding: 8bit';

    mail($to,$subject,$message,$header);
    header('location: ../?mail=true#contact');
  } else {
    header('location: ../?mail=false#contact');
  }
}
require_once(PATH_VIEWS.'accueil.php');
