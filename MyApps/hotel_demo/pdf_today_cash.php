<?php
require('mysql_table.php');
session_start();

$start_d= $_SESSION['rpt_start_date'];
$end_d=$_SESSION['rpt_end_date'];
 
class PDF extends PDF_MySQL_Table
{
function Header()
{
	$jdate=date("d-m-Y");
	$report_date=$jdate;
	
	
	// Add a Unicode font (uses UTF-8)
	 
 	//Title
	 
	$this->SetFont('Arial','',12);
	$this->Cell(0,6,' Sales Tax Report',0,1,'C');
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
mysql_connect('localhost','root','');
mysql_select_db('newdb');

$pdf=new PDF();
$pdf->AddPage();

 $today=date("Y-m-d");
//Second table: specify 3 columns
$pdf->AddCol('serial_number',7,'Sr','C');
$pdf->AddCol('cust_id',40,'Product No','C');
$pdf->AddCol('cust_id',70,'Name','C');
 $pdf->AddCol('pay_amount',22,'Dealer Price','C');
$pdf->AddCol('pay_amount',20,' MRP ','C');

$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table("select @a:=@a+1 serial_number,cust_id, pay_amount   
from payment pay_date=$today, (select @a:= 0) as a ");

$pdf->Output();

?>
