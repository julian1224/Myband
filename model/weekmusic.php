<?php
$musicdate = date("l");
switch($musicdate) {
  case 'Monday':
  $mp3source = "Pendulum - Granite Instrumental.mp3";
  break;

  case 'Tuesday':
  $mp3source = "Pendulum - The Fountain Instrumental.mp3";
  break;

  case 'Wednesday':
  $mp3source = "Pendulum - Encoder Instrumental.mp3";
  break;

  case 'Thursday':
  $mp3source = "Pendulum - Mutiny Instrumental.mp3";
  break;

  case 'Friday':
  $mp3source = "Pendulum - Witchcraft (Instrumental).mp3";
  break;

  case 'Saturday':
  $mp3source = "Pendulum - Different Instrumental.mp3";
  break;

  case 'Sunday':
  $mp3source = "Pendulum - Set Me On Fire Instrumental.mp3";
  break;
  default:
  $mp3source = "We have no clue what day it is. No music for now.";
  break;
}




?>
