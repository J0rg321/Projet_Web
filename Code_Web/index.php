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
	break;
  case 'cart' :
	cart();
	break;
  case 'login' :
	login();
	break;
  case 'create' :
	create();
	break;
  default :
	home();
}


/*} else {
  home();
}*/