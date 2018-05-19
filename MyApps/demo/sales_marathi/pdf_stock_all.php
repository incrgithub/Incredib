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
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'PC-DOCTOR MANGALWEDHA',0,1,'C');
	$this->SetFont('Arial','',12);
	$this->Cell(0,6,' Stock Report',0,1,'C');
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
mysql_select_db('computer');

$pdf=new PDF();
$pdf->AddPage();

 
//Second table: specify 3 columns
$pdf->AddCol('serial_number',7,'Sr','C');
$pdf->AddCol('item_id',40,'Product No','C');
$pdf->AddCol('item_name',70,'Name','C');
$pdf->AddCol('item_stock',25,'Stock','C');
$pdf->AddCol('purchase_price',22,'Dealer Price','C');
$pdf->AddCol('sale_price',20,' MRP ','C');

$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table("select @a:=@a+1 serial_number,item_id, item_name,item_stock,purchase_price,sale_price  
from  item_master, (select @a:= 0) as a ");

$pdf->Output();

?>
