
<?php

$dogBreeds = [ "Beagle" => "assets/Beagle.jpg",
                "Border Collie" => "assets/Border.jpg",
                "Bulldog" => "assets/Bulldog.jpg",
                 "Chihuahua" => "assets/Chihuahau.jpg",
                "Cocker Spaniel" => "assets/CockerSpan.jpg",
                "Corgi" => "assets/Corgi.jpg",
                "Dachshund" => "assets/Dachshund.jpg",
                "Doberman" => "assets/Doberman.jpg",
                "German Shepard" => "assets/GermanShepard.jpg",
                "Golden Retriever" => "assets/GoldenRetriever.jpg",
                "Great Dane"=> "assets/GreatDane.jpg",
                "Husky" => "assets/Husky.jpg",
                "Jack Russel Terrier" => "assets/JackRuss.jpg",
                "Labrador Retriever" => "assets/Labrador.jpg",
                "Pitbull" => "assets/Pitbull.jpg",
                "Pomeranian" => "assets/Pom.jpg",
                "Poodle" => "assets/Poodle.jpg",
                "Pug" => "assets/Pug.jpg",
                "Yorkshire Terrier" => "assets/Yorkie.jpg"];
 
    $name = $_POST["fName"]; 
    echo $name; 
    $phrases = [];
    array_push($phrases,$_POST["phrase1"]);
    array_push($phrases,$_POST["phrase2"]);
    array_push($phrases,$_POST["phrase3"]);
    
   // var_dump($phrases);
    
 $dogImages = [];
 $index =0;
 
 //populates the indexed array
 foreach($dogBreeds as $breed => $image){
     $dogImages[$index] = $image;
     $index++;
 }
 
function randDog($arr, $flag){
    while($flag!=-1){
        $randIndex = rand(0,count($arr));
        //echo $randIndex;
        return $arr[$randIndex];
    }
}    

function checkBreed($arr,$img){
    foreach($arr as $breed => $image){
            if($img == $image){
                return $breed;
            }
    }
}


$randImg=randDog($dogImages,$flag); 
$breed =  checkBreed($dogBreeds,$randImg);

?>

<!DOCTYPE html>
<html>

<head>

    <title>What breed of dog are you?</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>



<body>

    <div class="Container">

        <div class="inContainer">
            <div id="dogImg">
                <br />
                <?php 
                     echo "<img src='" .$randImg . "'/>"
                ?>
            </div>
            <div>
                <p>
                    Hey! It looks like you'd be a <?php echo $breed?>
                
                </p>
                
            </div>
        </div>
    </div>
</body>

</html>