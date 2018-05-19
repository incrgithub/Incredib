<?php
require('mysql_table.php');
session_start();

class PDF extends PDF_MySQL_Table
{
function Header()
{
	$jdate=date("d-m-Y");
	$report_date=$jdate;
	
	// Add a Unicode font (uses UTF-8)
	 
 	//Title
	$this->SetFont('Arial','',10);
	$this->Cell(0,3,'Report',0,1,'C');
	$this->SetFont('Arial','',12);
	$this->Cell(0,6,' Customer List',0,1,'C');
 	$this->SetFont('Arial','',10);
	$this->Cell(0,6,' on ',0,1,'C');
	$this->SetFont('Arial','',10);
	$this->Cell(0,6,$report_date,0,1,'C'); 	
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
include('connect.php');
$pdf=new PDF();
$pdf->AddPage();

 
//Second table: specify 3 columns
$pdf->AddCol('serial_number',10,'Sr','C');
$pdf->AddCol('cust_name',70,'Customer Name','C');
$pdf->AddCol('cust_add',50,'Address','C');
$pdf->AddCol('cust_mobile',25,'Mobile','C');
  
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table("select @a:=@a+1 serial_number,cust_name, cust_add,cust_mobile   
from  customer_master, (select @a:= 0) as a ");

$pdf->Output();

?>
