<style>
a:link {
    color: green;
}
</style>
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
       //$message=$message. curl_error($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       curl_close($ch);
       if($httpcode>=200 && $httpcode<300) return true;
       else return false;
}



       if (Visit('http://www.vivahyog.in'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.vivahyog.in' target='_blank'>Vivahyog </a> is Working</b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.vivahyog.in' target='_blank'>Vivahyog </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.incredibletechsolve.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.incredibletechsolve.com' target='_blank'>Incredible Tech Solve </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.incredibletechsolve.com' target='_blank'>Incredible Tech Solve </a> is not Working </b></font>\n\n";
       }
       
       
       if (Visit('http://www.dkkkp.edu.in'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.dkkkp.edu.in' target='_blank'>Phadtare Knowledge City </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.dkkkp.edu.in' target='_blank'>Phadtare Knowledge City </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.damajiexpress.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.damajiexpress.com' target='_blank'>Damaji Express </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.damajiexpress.com' target='_blank'>Damaji Express </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.kikaleassociates.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.kikaleassociates.com' target='_blank'>Kikale Associates </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.kikaleassociates.com' target='_blank'>Kikale Associates </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.neemindustry.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.neemindustry.com' target='_blank'>Shivkrupa Agro Industries </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.neemindustry.com' target='_blank'>Shivkrupa Agro Industries </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.lifeway.ind.in'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.lifeway.ind.in' target='_blank'>Lifeway </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.lifeway.ind.in' target='_blank'>Lifeway </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.vega-soyfit.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.vega-soyfit.com' target='_blank'>Vega Industries </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.vega-soyfit.com' target='_blank'>Vega Industries </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.ihsdpsatara.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.ihsdpsatara.com' target='_blank'>IHSDP Satara </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.ihsdpsatara.com' target='_blank'>IHSDP Satara </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.jagtapauto.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.jagtapauto.com' target='_blank'>Jagtap Auto </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.jagtapauto.com' target='_blank'>Jagtap Auto </a> is not Working </b></font>\n\n";
       }
       
        if (Visit('http://www.pcdoctormangalwedha.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.pcdoctormangalwedha.com' target='_blank'>PC Doctor Mangalwedha </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.pcdoctormangalwedha.com' target='_blank'>PC Doctor Mangalwedha </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.myyummyicecream.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.myyummyicecream.com' target='_blank'>My Yummy Icecream </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.myyummyicecream.com' target='_blank'>My Yummy Icecream </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.santchokhoba.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.santchokhoba.com' target='_blank'>Santchokhoba </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.santchokhoba.com' target='_blank'>Santchokhoba </a> is not Working </b></font>\n\n";
       }
       
       
        if (Visit('http://www.chaitanyasangeetvidyalay.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.chaitanyasangeetvidyalay.com' target='_blank'>Chaitanya Sangeet Vidyalay </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.chaitanyasangeetvidyalay.com' target='_blank'>Chaitanya Sangeet Vidyalay </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.phadtarefabtech.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.phadtarefabtech.com' target='_blank'>Phadtare Fab Tech </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.phadtarefabtech.com' target='_blank'>Phadtare Fab Tech </a> is not Working </b></font>\n\n";
       }
       
       if (Visit('http://www.alsafahomoeo.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.alsafahomoeo.com' target='_blank'>Alsafa Homoeo Clinic </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.alsafahomoeo.com' target='_blank'>Alsafa Homoeo Clinic </a> is not Working </b></font>\n\n";
       }
       
	   if (Visit('http://www.maharashtradesha.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.maharashtradesha.com' target='_blank'>Maharashtra Desha </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.maharashtradesha.com' target='_blank'>Maharashtra Desha </a> is not Working </b></font>\n\n";
       }
        if (Visit('http://www.constroqchecklab.com'))
       {
               $message=$message. "<img src='right1.gif'>&nbsp;&nbsp;<font color='green'><b><a href='http://www.constroqchecklab.com' target='_blank'>ConstroQCheck </a> is Working </b></font>\n\n";
       }
       else
       {
               $message=$message. "<img src='logout.png'>&nbsp;&nbsp;<font color='red'><b><a href='http://www.constroqchecklab.com' target='_blank'>ConstroQCheck </a> is not Working </b></font>\n\n";
       }
       
 sendEmail($message);      
          
function sendEmail($message) 
{
$r="-f"."srcsyscronmail@gmail.com";
$emailid="srcsyscronmail@gmail.com";
$sub="Website Status";
mail($emailid,$sub,$message,$headers,$r);
} 

?>