<?php
$title = "Extensions";
require_once "../assets/includes/setup.php";
require_once "../assets/includes/functions.php";
require_once "packagescontent.php";
require_once PATH_INC . "header.php";
require_once PATH_INC . "nav.inc.php";
require_once PATH_INC . "scrolltotop.php";
$html = "Installing Packages on Atom";
if(!empty($_POST)){
	$html = $_POST["variable_name"];
}

sidenav_from_array( $html, $setup_content );
load_from_array( $html, $setup_content );



require_once PATH_INC . "footer.php"; ?>
