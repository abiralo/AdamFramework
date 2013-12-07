<?php
/**
* WARNING: This file is part of the core Adam Framework. DO NOT edit
* this file under any circumstances. Please do all modifications
* in the form of a child theme.
**/

/**
####File Details####

* This is the main functions file

**/

//Everything from DOCTYPE TO 
function adam_start(){

	adam_doctype();
	
	echo '<html>
	';
	
	adam_header();
}


function adam_end(){
	
	echo "
	<!--Adam End-->
	";
	
	adam_footer();
	
	echo "
	<!--End Adam End-->
	";
	
}

//Everything from <head> to </head>
function adam_header(){
	
	echo "
	<!--Adam Header-->
	";
	
	echo '<head>
	';
	
	adam_title();
	adam_meta();
	
	$default_stylesheet = 'http://localhost/adam.0.1/wp-content/themes/adam.0.1/style.css';
	
	//Place Stylesheet
	echo '<link rel="stylesheet" type="text/css" media="all" href="'.$default_stylesheet.'" />
';
	
	wp_head();
	
	echo '</head>
	<body>';

	
	echo "
	<!--End Adam Header-->
	";
}


function adam_footer(){
	wp_footer();
	echo "</body>
	</html>
	";
	
}


function adam_body_glass(){
	echo "custom class";
	
}
//add_filter('body_class','adam_body_glass');

function adam_not_found(){
	echo "No Posts Found";
}