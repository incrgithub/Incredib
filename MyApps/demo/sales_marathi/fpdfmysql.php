<?php
//SHOW A DATABASE ON A PDF FILE
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');

//Connect to your database
include("connect.php");

 $today=date("Y-m-d");
//Select the Products you want to show in your PDF file
$result=mysql_query("select cust_id,pay_amount from payment where pay_date='$today' ");
$number_of_products = mysql_numrows($result);

//Initialize the 3 columns and the total
$column_code = "";
$column_price = "";
$total = 0;

//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$code = $row["cust_id"];
 	$real_price = $row["pay_amount"];
 
  	$column_price = $column_price.$real_price."\n";
 
	//Sum all the Prices (TOTAL)
	$total = $total+$real_price;
	
	 $query_i="select * from customer_master where cust_id='$code' ";
	  $rs = mysql_query($query_i);   while ($row_data = mysql_fetch_array($rs)){$i_data[] = $row_data;}  foreach($i_data as $ecol) {$i_name=$ecol['cust_name']; }
	$column_code = $column_code.$i_name."\n";
}
mysql_close();

//Convert the Total Price to a number with (.) for thousands, and (,) for decimals.
 
//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//addvertisement
$pdf->SetFont('Arial','B',12);
$pdf->SetY(10);
$pdf->SetX(20);
$pdf->Cell(160,6,'Incredible Tech Solution visit us www.incredibletechsolve.com 7588504729',1,0,'C',1);

 $pdf->Ln();

//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(40,6,'Customer Name',1,0,'C',1);
$pdf->SetX(60);
$pdf->Cell(40,6,'Amount',1,0,'C',1);

 $pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);
$pdf->MultiCell(40,6,$column_code,1,'C');
$pdf->SetY($Y_Table_Position);
 $pdf->SetX(60);
$pdf->MultiCell(40,6,$column_price,1,'C');
$pdf->SetX(60);
$pdf->MultiCell(40,6,'Rs. '.$total,1,'C');

//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
	$pdf->SetX(20);
	$pdf->MultiCell(120,6,'',1);
	$i = $i +1;
}

$pdf->Output();
?>
