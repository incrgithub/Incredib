<?php

       if (!isDomainAvailible('http://www.vivahyog.in'))
       {
               echo "Vivahyog is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.incredibletechsolve.com'))
       {
               echo "Incredible Tech Solve is not running !\n";
       }
       
       
       if (!isDomainAvailible('http://www.dkkkp.edu.in'))
       {
               echo "Phadtare Knowledge City is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.damajiexpress.com'))
       {
               echo "Damaji Express is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.kikaleassociates.com'))
       {
               echo "Kikale Associates is not running !\n";
       }
       
        if (!isDomainAvailible('http://www.neemindustry.com'))
       {
               echo "Shivkrupa Agro Industries is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.lifeway.ind.in'))
       {
               echo "Lifeway is not running !\n";
       }
       
        if (!isDomainAvailible('http://www.vega-soyfit.com'))
       {
               echo "Vega Industries is not running !\n";
       }
       
        if (!isDomainAvailible('http://www.ihsdpsatara.com'))
       {
               echo "IHSDP Satara is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.jagtapauto.com'))
       
       {
               echo "Jagtap Auto is not running !\n";
       }
       
        if (!isDomainAvailible('http://www.pcdoctormangalwedha.com'))
       {
               echo "PC Doctor Mangalwedha is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.myyummyicecream.com'))
      
       {
               echo "My Yummy Icecream is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.santchokhoba.com'))
       {
               echo "Santchokhoba is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.santchokhoba.com'))
       {
               echo "Santchokhoba is not running !\n";
       }
       
       
        if (!isDomainAvailible('http://www.chaitanyasangeetvidyalay.com'))
       {
               echo "Chaitanya Sangeet Vidyalay is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.phadtarefabtech.com'))
       {
               echo "Phadtare Fab Tech is not running !\n";
       }
       
       if (!isDomainAvailible('http://www.alsafahomoeo.com'))
       {
               echo "Alsafa Homoeo Clinic is not running !\n";
       }
       
	    if (!isDomainAvailible('http://www.maharashtradesha.com'))
       {
               echo "Maharashtra Desha is not running !\n";
       }
       
          

       //returns true, if domain is availible, false if not
       function isDomainAvailible($domain)
       {
               //check, if a valid url is provided
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //initialize curl
               $curlInit = curl_init($domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

               //get answer
               $response = curl_exec($curlInit);

               curl_close($curlInit);

               if ($response) return true;

               return false;
       }
?>