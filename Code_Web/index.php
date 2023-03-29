<?php

session_start();
require "controllers/navigation.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
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
	lost();
}


/*} else {
  home();
}*/