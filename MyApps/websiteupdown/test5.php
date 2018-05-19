
<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

function Visit($url){
       $agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";$ch=curl_init();
       curl_setopt ($ch, CURLOPT_URL,$url );
       curl_setopt($ch, CURLOPT_USERAGENT, $agent);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt ($ch,CURLOPT_VERBOSE,false);
       curl_setopt($ch, CURLOPT_TIMEOUT, 5);
       curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt($ch,CURLOPT_SSLVERSION,3);
       curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
       $page=curl_exec($ch);
       //echo "curl_error($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       curl_close($ch);
       if($httpcode>=200 && $httpcode<300) return true;
       else return false;
}



       if (Visit('http://www.vivahyog.in'))
       {
               echo "Vivahyog is Working\n\n";
       }
       else
       {
               echo "Vivahyog is not Working \n\n";
       }
       
       if (Visit('http://www.incredibletechsolve.com'))
       {
               echo "Incredible Tech Solve is Working \n\n";
       }
       else
       {
               echo "Incredible Tech Solve is not Working \n\n";
       }
       
       
       if (Visit('http://www.dkkkp.edu.in'))
       {
               echo "Phadtare Knowledge City is Working \n\n";
       }
       else
       {
               echo "Phadtare Knowledge City is not Working \n\n";
       }
       
        if (Visit('http://www.damajiexpress.com'))
       {
               echo "Damaji Express is Working \n\n";
       }
       else
       {
               echo "Damaji Express is not Working \n\n";
       }
       
        if (Visit('http://www.kikaleassociates.com'))
       {
               echo "Kikale Associates is Working \n\n";
       }
       else
       {
               echo "Kikale Associates is not Working \n\n";
       }
       
        if (Visit('http://www.neemindustry.com'))
       {
               echo "Shivkrupa Agro Industries is Working \n\n";
       }
       else
       {
               echo "Shivkrupa Agro Industries is not Working \n\n";
       }
       
       if (Visit('http://www.lifeway.ind.in'))
       {
               echo "Lifeway is Working \n\n";
       }
       else
       {
               echo "Lifeway is not Working \n\n";
       }
       
        if (Visit('http://www.vega-soyfit.com'))
       {
               echo "Vega Industries is Working \n\n";
       }
       else
       {
               echo "Vega Industries is not Working \n\n";
       }
       
        if (Visit('http://www.ihsdpsatara.com'))
       {
               echo "IHSDP Satara is Working \n\n";
       }
       else
       {
               echo "IHSDP Satara is not Working \n\n";
       }
       
       if (Visit('http://www.jagtapauto.com'))
       {
               echo "Jagtap Auto is Working \n\n";
       }
       else
       {
               echo "Jagtap Auto is not Working \n\n";
       }
       
        if (Visit('http://www.pcdoctormangalwedha.com'))
       {
               echo "PC Doctor Mangalwedha is Working \n\n";
       }
       else
       {
               echo "PC Doctor Mangalwedha is not Working \n\n";
       }
       
       if (Visit('http://www.myyummyicecream.com'))
       {
               echo "My Yummy Icecream is Working \n\n";
       }
       else
       {
               echo "My Yummy Icecream is not Working \n\n";
       }
       
       if (Visit('http://www.santchokhoba.com'))
       {
               echo "Santchokhoba is Working \n\n";
       }
       else
       {
               echo "Santchokhoba is not Working \n\n";
       }
       
       
        if (Visit('http://www.chaitanyasangeetvidyalay.com'))
       {
               echo "Chaitanya Sangeet Vidyalay is Working \n\n";
       }
       else
       {
               echo "Chaitanya Sangeet Vidyalay is not Working \n\n";
       }
       
       if (Visit('http://www.phadtarefabtech.com'))
       {
               echo "Phadtare Fab Tech is Working \n\n";
       }
       else
       {
               echo "Phadtare Fab Tech is not Working \n\n";
       }
       
       if (Visit('http://www.alsafahomoeo.com'))
       {
               echo "Alsafa Homoeo Clinic is Working \n\n";
       }
       else
       {
               echo "Alsafa Homoeo Clinic is not Working \n\n";
       }
       
	   if (Visit('http://www.maharashtradesha.com'))
       {
               echo "Maharashtra Desha is Working \n\n";
       }
       else
       {
               echo "Maharashtra Desha is not Working \n\n";
       }
        if (Visit('http://www.constroqchecklab.com'))
       {
               echo "ConstroQCheck is Working \n\n";
       }
       else
       {
               echo "ConstroQCheck is not Working \n\n";
       }
       

?>