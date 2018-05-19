<?php

include('sms.php');
function Visit($url){
        if($socket =@ fsockopen($url, 80, $errno, $errstr, 30)) {
			return true;
			fclose($socket);
			} else {
			return false;
			}
		}

$count=0;
$websites=" ";

       if (Visit('vivahyog.in'))
       {
               echo "Vivahyog is Working\n\n";
       }
       else
       {
               echo "Vivahyog is not Working \n\n";
               $count++;
               $websites=$websites."Vivahyog,";
       }
       
       if (Visit('incredibletechsolve.com'))
       {
               echo "Incredible Tech Solve is Working \n\n";
       }
       else
       {
               echo "Incredible Tech Solve is not Working \n\n";
               $count++;
               $websites=$websites."Incredible,";
       }
       
       
       if (Visit('dkkkp.edu.in'))
       {
               echo "Phadtare Knowledge City is Working \n\n";
       }
       else
       {
               echo "Phadtare Knowledge City is not Working \n\n";
               $count++;
               $websites=$websites."DKKP.EDU.IN,";
       }
       
        if (Visit('damajiexpress.com'))
       {
               echo "Damaji Express is Working \n\n";
       }
       else
       {
               echo "Damaji Express is not Working \n\n";
               $count++;
               $websites==$websites."Damaji,";
       }
       
        if (Visit('kikaleassociates.com'))
       {
               echo "Kikale Associates is Working \n\n";
       }
       else
       {
               echo "Kikale Associates is not Working \n\n";
               $count++;
               $websites=$websites."Kikale,";
       }
       
        if (Visit('neemindustry.com'))
       {
               echo "Shivkrupa Agro Industries is Working \n\n";
       }
       else
       {
               echo "Shivkrupa Agro Industries is not Working \n\n";
               $count++;
               $websites=$websites."Shivkrupa,";
       }
       
       if (Visit('lifeway.ind.in'))
       {
               echo "Lifeway is Working \n\n";
       }
       else
       {
               echo "Lifeway is not Working \n\n";
               $count++;
               $websites=$websites."Lifeway,";
       }
       
        if (Visit('vega-soyfit.com'))
       {
               echo "Vega Industries is Working \n\n";
       }
       else
       {
               echo "Vega Industries is not Working \n\n";
               $count++;
               $websites=$websites."Vega,";
       }
       
        if (Visit('ihsdpsatara.com'))
       {
               echo "IHSDP Satara is Working \n\n";
       }
       else
       {
               echo "IHSDP Satara is not Working \n\n";
               $count++;
               $websites=$websites."IHSDP Satara,";
       }
             
       
       if (Visit('myyummyicecream.com'))
       {
               echo "My Yummy Icecream is Working \n\n";
       }
       else
       {
               echo "My Yummy Icecream is not Working \n\n";
               $count++;
               $websites=$websites."MyYummy,";
       }
       
       if (Visit('santchokhoba.com'))
       {
               echo "Santchokhoba is Working \n\n";
       }
       else
       {
               echo "Santchokhoba is not Working \n\n";
               $count++;
               $websites=$websites."Santchokhoba,";
       }
       
       
        if (Visit('chaitanyasangeetvidyalay.com'))
       {
               echo "Chaitanya Sangeet Vidyalay is Working \n\n";
       }
       else
       {
               echo "Chaitanya Sangeet Vidyalay is not Working \n\n";
               $count++;
               $websites=$websites."Chaitanya Sangeet Vidyalay,";
       }
       
       if (Visit('phadtarefabtech.com'))
       {
               echo "Phadtare Fab Tech is Working \n\n";
       }
       else
       {
               echo "Phadtare Fab Tech is not Working \n\n";
               $count++;
               $websites=$websites."Phadtare Fab Tech,";
       }
       
       
        if (Visit('constroqchecklab.com'))
       {
               echo "ConstroQCheck is Working \n\n";
       }
       else
       {
               echo "ConstroQCheck is not Working \n\n";
               $count++;
               $websites=$websites."ConstroQCheck,";
       }
       
        if (Visit('dkkkpmba.com'))
       {
               echo "DKKKP:MIM is Working \n\n";
       }
       else
       {
               echo "DKKKP:MIM is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:MIM,";
       }
       
         if (Visit('dkkkpbpp.com'))
       {
               echo "DKKKP:BPP is Working \n\n";
       }
       else
       {
               echo "DKKKP:BPP is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:BPP,";
       }
       
          if (Visit('dkkkpitikalamb.com'))
       {
               echo "DKKKP:ITI is Working \n\n";
       }
       else
       {
               echo "DKKKP:ITI is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:ITI,";
       }
       
         if (Visit('dkkkpsvems.com'))
       {
               echo "DKKKP:SVEMS is Working \n\n";
       }
       else
       {
               echo "DKKKP:SVEMS is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:SVEMS,";
       }
       
         if (Visit('dkkkppgs.com'))
       {
               echo "DKKKP:PGS is Working \n\n";
       }
       else
       {
               echo "DKKKP:PGS is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:PGS,";
       }
       
         if (Visit('dkkkpjrclscikalamb.com'))
       {
               echo "DKKKP:SPC is Working \n\n";
       }
       else
       {
               echo "DKKKP:SPC is not Working \n\n";
               $count++;
               $websites=$websites."DKKKP:SPC,";
       }
       
       
    if($count > 0) {
$mess="Websites ".$websites." are not working.All Other Websites are Working Properly... ";
echo $mess;
sendSmsToAmit($mess);
sendSmsToAbhijit($mess);
}       
else {
$mess="All Websites are Working Properly...";
echo $mess;
sendSmsToAmit($mess);
sendSmsToAbhijit($mess);
}
?>