<?php
$title = "General";
require_once "/home/MAIN/vkc9448/Sites/240/SkinnyBritchesWebProject/assets/includes/setup.php";
require_once PATH_INC . "functions.php";
require_once "content.php";
require_once PATH_INC . "header.php";
require_once PATH_INC . "nav.inc.php";
$html = "Why Choose Atom?";
if(!empty($_POST)){
	$html = $_POST["variable_name"];
}

sidenav_from_array( $html, $content );
load_from_array( $html, $content );



require_once PATH_INC . "footer.php"; 
?>