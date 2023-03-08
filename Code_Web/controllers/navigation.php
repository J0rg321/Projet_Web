<?php

function home(){
  require "views/home.php";
}

function lost(){
  require "view/lost.php";
}




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