<?php 
require("./fpdf/fpdf.php");

class PDF extends FPDF{

    function header(){
        $this->SetFont("Arial","B",12);
        $this->Cell(0,10,"Impression en PDF",0,1,"C");
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont("Arial","I",8);
        $this->Cell(0,10,"Page ". $this->PageNo(),0,0,"C");
    }

    function createLinesWithText(){
        $this->Line(10,30,200,30);
        $this->Cell(0,10,iconv('UTF-8', 'ISO-8859-1',"Premiere Ligne"),0,1,'L');

        $this->Line(10,40,200,40);
        $this->Cell(0,10,iconv('UTF-8', 'ISO-8859-1',"Deuxieme Ligne"),0,1,'L');

        $this->Line(10,50,200,50);
        $this->Cell(0,10,iconv('UTF-8', 'ISO-8859-1',"Troisieme Ligne"),0,1,'L');

        $this->Line(10,60,200,60);
        $this->Cell(0,10,iconv('UTF-8', 'ISO-8859-1',"Quatrieme Ligne"),0,1,'L');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->createLinesWithText();
$pdf->Output();
?>