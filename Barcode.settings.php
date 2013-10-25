<?php 
/****************************Version 3.8a***************************/
 /* Wikiunity Extension 
 /*
 /* by Michael McCouman jr. & C.J. Scheffold
 /*
 /* Copyright (C)2000-2010
 */  
//Hook

$wgHooks['ParserFirstCallInit'][] = 'efBarcodeSetup';
 
function efBarcodeSetup( &$parser ) {
	$parser->setHook( 'barcode', 'efBarcodeRender' );
       return true;
}
function efBarcodeRender( $text, $args, $parser, $frame ) {

//Output

	$output = $parser->recursiveTagParse( $text, $frame );
	return "<IMG SRC='/w/extensions/Tester(McCouman)/Barcode/Barcode.default.php?barcode="
		
	
	 . $output . "&height=40'>";
}
