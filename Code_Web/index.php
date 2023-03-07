<?php

session_start();
require "controller/navigation.php";
require "controller/Snow.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
	case 'accueil' :
	  accueil();
	  break;
	case 'vetements' :
	  vetements();

	case 'cart' :
	  cart();

	case 'compte' :
	  compte();

	default :
	  accueil();
  }
} else {
  home();
}