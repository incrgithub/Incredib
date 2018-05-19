		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                         <li > <a href="dash.php" ><font size="+2"><div align="center">  Dashboard
  </div> </font></a> </li>
  						<table class="hidden-print">
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr>
						<tr><td> </td></tr> 
						<tr><td colspan="5" align="center"><font color="#FF9900" size="+2"> TABLES  </font></td></tr>
						<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td></tr> 
<?php

include("connect.php");

$a=array();

$query="select distinct bill_id from temp_sale_master";

$rs=mysql_query($query) or die(mysql_error());

while($row=mysql_fetch_array($rs))
{
//echo $row[0]."<br>";
array_push($a,$row[0]);
}

?>
						<tr> 
							<td><a href="bill_one.php?table=1"> <button ><?php if(in_array("1", $a)) { ?><font size="+2" color="green"> 01  </font><?php  } else { ?><font size="+2" color="red"> 01  </font> <?php } ?></button></a></td>

							<td><a href="bill_one.php?table=2"> <button ><?php if(in_array("2", $a)) { ?><font size="+2" color="green"> 02  </font><?php  } else { ?><font size="+2" color="red"> 02  </font> <?php } ?></button></a></td>

							<td><a href="bill_one.php?table=3"> <button ><?php if(in_array("3", $a)) { ?><font size="+2" color="green"> 03  </font><?php  } else { ?><font size="+2" color="red"> 03  </font> <?php } ?></button></a></td>

							<td><a href="bill_one.php?table=4"> <button ><?php if(in_array("4", $a)) { ?><font size="+2" color="green"> 04  </font><?php  } else { ?><font size="+2" color="red"> 04  </font> <?php } ?></button></a></td>

							<td><a href="bill_one.php?table=5"> <button ><?php if(in_array("5", $a)) { ?><font size="+2" color="green"> 05  </font><?php  } else { ?><font size="+2" color="red"> 05  </font> <?php } ?></button></a></td>

						</tr>
						
						<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 
						
						<tr>
							<td><a href="bill_one.php?table=6"> <button ><?php if(in_array("6", $a)) { ?><font size="+2" color="green"> 06  </font><?php  } else { ?><font size="+2" color="red"> 06  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=7"> <button ><?php if(in_array("7", $a)) { ?><font size="+2" color="green"> 07  </font><?php  } else { ?><font size="+2" color="red"> 07  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=8"> <button ><?php if(in_array("8", $a)) { ?><font size="+2" color="green"> 08  </font><?php  } else { ?><font size="+2" color="red"> 08  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=9"> <button ><?php if(in_array("9", $a)) { ?><font size="+2" color="green"> 09  </font><?php  } else { ?><font size="+2" color="red"> 09  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=10"> <button ><?php if(in_array("10", $a)) { ?><font size="+2" color="green">10  </font><?php  } else { ?><font size="+2" color="red"> 10 </font> <?php } ?></button></a></td>		
						</tr>
						
						<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 
					


						<tr>
							<td><a href="bill_one.php?table=11"> <button ><?php if(in_array("11", $a)) { ?><font size="+2" color="green"> 11  </font><?php  } else { ?><font size="+2" color="red"> 11  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=12"> <button ><?php if(in_array("12", $a)) { ?><font size="+2" color="green"> 12  </font><?php  } else { ?><font size="+2" color="red"> 12  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=13"> <button ><?php if(in_array("13", $a)) { ?><font size="+2" color="green"> 13  </font><?php  } else { ?><font size="+2" color="red"> 13  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=14"> <button ><?php if(in_array("14", $a)) { ?><font size="+2" color="green"> 14  </font><?php  } else { ?><font size="+2" color="red"> 14  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=15"> <button ><?php if(in_array("15", $a)) { ?><font size="+2" color="green">15  </font><?php  } else { ?><font size="+2" color="red"> 15 </font> <?php } ?></button></a></td>		
						</tr>

							
						<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 
						
						<tr>
							<td><a href="bill_one.php?table=16"> <button ><?php if(in_array("16", $a)) { ?><font size="+2" color="green"> 16  </font><?php  } else { ?><font size="+2" color="red"> 16  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=17"> <button ><?php if(in_array("17", $a)) { ?><font size="+2" color="green"> 17  </font><?php  } else { ?><font size="+2" color="red"> 17  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=18"> <button ><?php if(in_array("18", $a)) { ?><font size="+2" color="green"> 18  </font><?php  } else { ?><font size="+2" color="red"> 18  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=19"> <button ><?php if(in_array("19", $a)) { ?><font size="+2" color="green"> 19  </font><?php  } else { ?><font size="+2" color="red"> 19  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=20"> <button ><?php if(in_array("20", $a)) { ?><font size="+2" color="green"> 20  </font><?php  } else { ?><font size="+2" color="red"> 20 </font> <?php } ?></button></a></td>		
						</tr>
						
		<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 

<tr>
							<td><a href="bill_one.php?table=21"> <button ><?php if(in_array("21", $a)) { ?><font size="+2" color="green"> 21  </font><?php  } else { ?><font size="+2" color="red"> 21  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=22"> <button ><?php if(in_array("22", $a)) { ?><font size="+2" color="green"> 22  </font><?php  } else { ?><font size="+2" color="red"> 22  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=23"> <button ><?php if(in_array("23", $a)) { ?><font size="+2" color="green"> 23  </font><?php  } else { ?><font size="+2" color="red"> 23  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=24"> <button ><?php if(in_array("24", $a)) { ?><font size="+2" color="green"> 24  </font><?php  } else { ?><font size="+2" color="red"> 24  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=25"> <button ><?php if(in_array("25", $a)) { ?><font size="+2" color="green"> 25  </font><?php  } else { ?><font size="+2" color="red"> 25 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 

						
						<tr>
							<td><a href="bill_one.php?table=26"> <button ><?php if(in_array("26", $a)) { ?><font size="+2" color="green"> 26  </font><?php  } else { ?><font size="+2" color="red"> 26  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=27"> <button ><?php if(in_array("27", $a)) { ?><font size="+2" color="green"> 27  </font><?php  } else { ?><font size="+2" color="red"> 27  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=28"> <button ><?php if(in_array("28", $a)) { ?><font size="+2" color="green"> 28  </font><?php  } else { ?><font size="+2" color="red"> 28  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=29"> <button ><?php if(in_array("29", $a)) { ?><font size="+2" color="green"> 29  </font><?php  } else { ?><font size="+2" color="red"> 29  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=30"> <button ><?php if(in_array("30", $a)) { ?><font size="+2" color="green"> 30  </font><?php  } else { ?><font size="+2" color="red"> 30 </font> <?php } ?></button></a></td>		
						</tr>


		<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 

						<tr>
							<td><a href="bill_one.php?table=31"> <button ><?php if(in_array("31", $a)) { ?><font size="+2" color="green"> 31  </font><?php  } else { ?><font size="+2" color="red"> 31  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=32"> <button ><?php if(in_array("32", $a)) { ?><font size="+2" color="green"> 32  </font><?php  } else { ?><font size="+2" color="red"> 32  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=33"> <button ><?php if(in_array("33", $a)) { ?><font size="+2" color="green"> 33  </font><?php  } else { ?><font size="+2" color="red"> 33  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=34"> <button ><?php if(in_array("34", $a)) { ?><font size="+2" color="green"> 34  </font><?php  } else { ?><font size="+2" color="red"> 34  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=35"> <button ><?php if(in_array("35", $a)) { ?><font size="+2" color="green"> 35  </font><?php  } else { ?><font size="+2" color="red"> 35 </font> <?php } ?></button></a></td>		
						</tr>

	<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 


						<tr>
							<td><a href="bill_one.php?table=36"> <button ><?php if(in_array("36", $a)) { ?><font size="+2" color="green"> 36  </font><?php  } else { ?><font size="+2" color="red"> 36  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=37"> <button ><?php if(in_array("37", $a)) { ?><font size="+2" color="green"> 37  </font><?php  } else { ?><font size="+2" color="red"> 37  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=38"> <button ><?php if(in_array("38", $a)) { ?><font size="+2" color="green"> 38  </font><?php  } else { ?><font size="+2" color="red"> 38  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=39"> <button ><?php if(in_array("39", $a)) { ?><font size="+2" color="green"> 39  </font><?php  } else { ?><font size="+2" color="red"> 39  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=40"> <button ><?php if(in_array("40", $a)) { ?><font size="+2" color="green"> 40  </font><?php  } else { ?><font size="+2" color="red"> 40 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 
<tr>
							<td><a href="bill_one.php?table=41"> <button ><?php if(in_array("41", $a)) { ?><font size="+2" color="green"> 41  </font><?php  } else { ?><font size="+2" color="red"> 41 </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=42"> <button ><?php if(in_array("42", $a)) { ?><font size="+2" color="green"> 42  </font><?php  } else { ?><font size="+2" color="red"> 42  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=43"> <button ><?php if(in_array("43", $a)) { ?><font size="+2" color="green"> 43  </font><?php  } else { ?><font size="+2" color="red"> 43  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=44"> <button ><?php if(in_array("44", $a)) { ?><font size="+2" color="green"> 44  </font><?php  } else { ?><font size="+2" color="red"> 44  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=45"> <button ><?php if(in_array("45", $a)) { ?><font size="+2" color="green"> 45  </font><?php  } else { ?><font size="+2" color="red"> 45 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 
					  
<tr>
							<td><a href="bill_one.php?table=46"> <button ><?php if(in_array("46", $a)) { ?><font size="+2" color="green"> 46  </font><?php  } else { ?><font size="+2" color="red"> 46 </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=47"> <button ><?php if(in_array("47", $a)) { ?><font size="+2" color="green"> 47  </font><?php  } else { ?><font size="+2" color="red"> 47  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=48"> <button ><?php if(in_array("48", $a)) { ?><font size="+2" color="green"> 48  </font><?php  } else { ?><font size="+2" color="red"> 48  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=49"> <button ><?php if(in_array("49", $a)) { ?><font size="+2" color="green"> 49  </font><?php  } else { ?><font size="+2" color="red"> 49  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=50"> <button ><?php if(in_array("50", $a)) { ?><font size="+2" color="green"> 50  </font><?php  } else { ?><font size="+2" color="red"> 50 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 

<tr>
							<td><a href="bill_one.php?table=51"> <button ><?php if(in_array("51", $a)) { ?><font size="+2" color="green"> 51  </font><?php  } else { ?><font size="+2" color="red"> 51 </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=52"> <button ><?php if(in_array("52", $a)) { ?><font size="+2" color="green"> 52  </font><?php  } else { ?><font size="+2" color="red"> 52  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=53"> <button ><?php if(in_array("53", $a)) { ?><font size="+2" color="green"> 53  </font><?php  } else { ?><font size="+2" color="red"> 53  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=54"> <button ><?php if(in_array("54", $a)) { ?><font size="+2" color="green"> 54  </font><?php  } else { ?><font size="+2" color="red"> 54  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=55"> <button ><?php if(in_array("55", $a)) { ?><font size="+2" color="green"> 55  </font><?php  } else { ?><font size="+2" color="red"> 55 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 

<tr>
							<td><a href="bill_one.php?table=56"> <button ><?php if(in_array("56", $a)) { ?><font size="+2" color="green"> 56  </font><?php  } else { ?><font size="+2" color="red"> 56 </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=57"> <button ><?php if(in_array("57", $a)) { ?><font size="+2" color="green"> 57  </font><?php  } else { ?><font size="+2" color="red"> 57  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=58"> <button ><?php if(in_array("58", $a)) { ?><font size="+2" color="green"> 58  </font><?php  } else { ?><font size="+2" color="red"> 58  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=59"> <button ><?php if(in_array("59", $a)) { ?><font size="+2" color="green"> 59  </font><?php  } else { ?><font size="+2" color="red"> 59  </font> <?php } ?></button></a></td>
							
							<td><a href="bill_one.php?table=60"> <button ><?php if(in_array("60", $a)) { ?><font size="+2" color="green"> 60  </font><?php  } else { ?><font size="+2" color="red"> 60 </font> <?php } ?></button></a></td>		
						</tr>

<tr><td> </td> </tr> <tr><td> </td> </tr> 	<tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr> <tr><td> </td> </tr><tr><td> </td> </tr> <tr><td> </td> </tr> 


					  
					     </table>
                        </ul>
                </div>