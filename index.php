<?php
	require('lib/mbfpdf.php');

	$str  = "繁栄する   1212 không\n";
	$str =  mb_convert_encoding($str, "SJIS", "UTF-8");
	
	$pdf = new MBFPDF(); 
	$pdf->AddPage();
	$pdf->setSourceFile('drp1470.pdf');
	$tplIdx = $pdf->importPage(1);
	// use the imported page and place it at position 10,10 with a width of 100 mm
	$pdf->useTemplate($tplIdx, 10, 10, 0);
	$pdf->AddMBFont(GOTHIC ,'SJIS');
	$pdf->SetFont(GOTHIC,'',10);
	$pdf->Text( 1,20, $str );
	$pdf->Output();
?>
