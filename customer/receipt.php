<?php
	
	include 'dbcon.php';
	$bid=$_GET['bid'];
	global $bid;
	

	include("MPDF54/mpdf.php");
	$mpdf=new mPDF();
	// Buffer the following html with PHP so we can store it to a variable later
	ob_start();

	include("custpform.php");

	// This is where your script would normally output the HTML using echo or print

	// Now collect the output buffer into a variable
	$html = ob_get_contents();
	ob_end_clean();

	// send the captured HTML from the output buffer to the mPDF class for processing
	$mpdf->WriteHTML($html);

	$mpdf->Output();
	exit;
?>