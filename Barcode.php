<?php
 /****************************Version 3.8a***************************/
 /* Wikiunity Extension 
 /*
 /* by Michael McCouman jr. & C.J. Scheffold
 /*
 /* Copyright (C)2000-2010
 */ 

if( !defined( 'MEDIAWIKI' ) )
	die();

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'Barcode',
	'author'         => array( 'Michael [[User:McCouman]] jr.', 'C.J. Scheffold' ),
	'description'    => 'Erzeugt einen Barcode und gibt diesen als Bild in einem Artikel aus.<br><b>Beispiel:</b><br><nowiki><barcode><barwidth>114px</barwidth>12345678</barcode></nowiki>',
	'descriptionmsg' => 'barcode-desc',
	'url'            => 'http://de.wikiunity.com',
);

require_once( "$IP/extensions/Tester(McCouman)/Barcode/Barcode.settings.php"); //Barcode <tag>
require_once( "$IP/extensions/Tester(McCouman)/Barcode/Barcode.config.php"); //Width defination