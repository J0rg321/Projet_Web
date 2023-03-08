<?php

session_start();
require "controllers/navigation.php";


/*if (isset($_GET['action'])) {*/


$action = $_GET['action'];
switch ($action) {
  case 'home' :
	home();
	break;
  case 'clothes' :
	clothes();

  case 'cart' :
	cart();

  case 'login' :
	login();

  case 'create' :
	create();

  default :
	home();
}


/*} else {
  home();
}*/