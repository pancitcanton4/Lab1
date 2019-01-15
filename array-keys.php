<?php

$ceu = array("italy"=>"Rome", "Luxembourge"=>"Luxembourge", 
"belgium "=> "brussels", "Denmark"=>"Copenhagen", "findaland"=>"helsinki", "France"=>"paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany"=>"Berlin", "Greece"=>"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London","Cyprus"=>"Niscosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=> "Tallin", "Hungray"=>"Budapest", "Latvia"=>"Riga", "Nalta"=>"Valetta", "Austria"=>"Vienna", "Poland"=>"Warsaw",);
asort($ceu);
foreach($ceu as $country=> $capital)
    echo "The capital of $country is $capital"."<br>";