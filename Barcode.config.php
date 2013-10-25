<?php
 /****************************Version 3.8a***************************/
 /* Wikiunity Extension 
 /*
 /* by Michael McCouman jr. & C.J. Scheffold
 /*
 /* Copyright (C)2000-2010
 */ 
 
/*width Tag */
 
//Hook
$wgHooks['ParserFirstCallInit'][] = 'efBarcoderWidthSetup';
 
function efBarcoderWidthSetup( &$parser ) {
	$parser->setHook( 'barwidth', 'efBarcoderWidthRender' );
       return true;
}
//Output
function efBarcoderWidthRender( $text, $args, $parser, $frame ) {
	$output = $parser->recursiveTagParse( $text, $frame );
	return '&width=' 
	. $output . '';
}
