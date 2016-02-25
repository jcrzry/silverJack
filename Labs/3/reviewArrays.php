<?php
//Declare
    $family = ["John","Susanne","Jason","Tina"];
    $kids = array();
    $kids[]= "tanner";
    array_push($kids,"Alexis");
    array_push($kids,"Tristan");
    //used to splice the array; either to add a new element or to remove an old element.
    //Mainly used for indexed arrays;
    array_splice($kids,0,1,"Aidan");
  //  var_dump($kids);
    
    
//multi dimensional array;ss
$family [] = $kids;
    //returns 3rd element within the array at 5th location in the family array. 
echo($family[2][2]);
    
    
//initialize

//use: iterate or loop.
for($i=0; $i<count($kids)-1;$i++){
    array_push($family,$kids[$i]);
}

//var_dump($family);

//Associative Arrays

$extendedFamily = ["uncle" => "john", "aunt" => "elvira","cousin"=>"martin"];

//used to remove item from associated array or to delete the array completely.
unset($extendedFamily["aunt"]);
$extendedFamily["aunt"] = "elvira";
// do not mix associatve arrays and indexed arrays! don't use this ---> array_push($extendedFamily,"janine");
foreach($extendedFamily as $memeber => $name){
    
    echo "Relationship: $member Name: $name <br />";
}



?>