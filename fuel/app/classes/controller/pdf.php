<?php

class Controller_Pdf extends Controller
{

	public function action_index()
	{
		Package::load('pdf');
		$pdf = Pdf::factory('tcpdf')->init("L", "mm", "A4", true, "UTF-8");
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->AddPage();
		$pdf->SetFont('kozminproregular', '', 12);
		$pdf->Text( 10, 10, "TCPDFでPDFを生成する" );
		$pdf->Output("test.pdf", "I");
	}
}
