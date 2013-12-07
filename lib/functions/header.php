<?php
/**
* WARNING: This file is part of the core Adam Framework. DO NOT edit
* this file under any circumstances. Please do all modifications
* in the form of a child theme.
**/

/**
####File Details####

* This is the Header Function Files

**/

/*Installs the DOCTYPE in the Header*/
function adam_doctype(){
	echo '<!DOCTYPE html>
	';

	
}

/*Installs the Tutle of the site*/
function adam_title(){
	echo  "<title>" . wp_title( '|', true, 'right' ) . "</title>
	";
}

/*Installs the Meta Tags*/
function adam_meta(){
	echo '<meta name="generator" content="Adam Framework for WordPress" />
	';
}
