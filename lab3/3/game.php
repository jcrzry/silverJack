

<?php
//empty() will return if the string variable is empty. 
//isset() returns if the variable has been set in the request. 
$player1 = ["imgageName" => "",
                "name" => $_POST["p1"]];
$player2 = ["imgageName" => "",
                "name" => $_POST["p2"]];
$player3 = ["imgageName" => "",
                "name" => $_POST["p3"]];
$player4 = ["imgageName" => "",
                "name" => $_POST["p4"]];
                
                
$table= [$player1,$player2,$player3,$player4];
                
 $deck = array("clubs" => glob("assets/clubs/*.png"), "diamonds"=>glob("assets/diamonds/*.png"), 
    "hearts"=> glob("assets/hearts/*.png"), "spades"=>glob("assets/spades/*.png"));
function deal(array $deck, $numCards,$i){
    while($i<=$numCards){
        $suitCard=rand(0,3);
        $randomCard = rand(1,13);
            if($suitCard==0){
                $suit = "clubs";
                if($deck["$suit"]["$randomCard"] !==0 && $deck["$suit"]["$randomCard"] !== null){
                    $value = (int)preg_replace("/[^0-9]/", "",substr($deck["$suit"][$randomCard],-6,3));
                    $hand["$value"] = $deck["$suit"][$randomCard];
                    $deck["$suit"][$randomCard]=0;
                    $i++;
                }
                else{
                    deal($deck,$numCards,$i);
                }    
            }
            elseif($suitCard==1){
                $suit = "diamonds";
                if($deck["$suit"]["$randomCard"] !==0 && $deck["$suit"]["$randomCard"] !== null){
                    $value = (int)preg_replace("/[^0-9]/", "",substr($deck["$suit"][$randomCard],-6,3));
                    $hand["$value"] = $deck["$suit"][$randomCard];
                    $deck["$suit"][$randomCard]=0;
                    $i++;
                }
                else{
                    deal($deck,$numCards,$i);
                }
            }
            elseif($suitCard==2){
                $suit = "hearts";
                if($deck["$suit"]["$randomCard"] !==0 && $deck["$suit"]["$randomCard"] !== null){
                    $value = (int)preg_replace("/[^0-9]/", "",substr($deck["$suit"][$randomCard],-6,3));
                    $hand["$value"] = $deck["$suit"][$randomCard];
                    $deck["$suit"][$randomCard]=0;
                    $i++;
                }
                else{
                     deal($deck,$numCards,$i);
                }
                
            }
            elseif($suitCard==3){
                $suit = "spades";
                if($deck["$suit"]["$randomCard"] !==0 && $deck["$suit"]["$randomCard"] !== null){
                    $value = (int) preg_replace("/[^0-9]/", "",substr($deck["$suit"][$randomCard],-6,3));
                    $hand["$value"] = $deck["$suit"][$randomCard];
                    $deck["$suit"][$randomCard] = 0;
                    $i++;
                }
                else{
                     deal($deck,$numCards,$i);
                }
            }
    }
    return $hand;
}
function displayPlayerHand($hand){
    foreach($hand as $value=>$card){
        $total+=$value;
        echo '<image src="'.$card.'" />';
    }
    echo '<h3>'.$total.'</h3>';
    return $total;
    
}
function pScore($hand){
    foreach($hand as $value=>$card){
        $total+=$value;
    }
    return $total;
}
 

function winner($ps1,$ps2,$ps3,$ps4){
    $scores = [$ps1,$ps2,$ps3,$ps4];
    for($i =0;$i<count($scores)-1;$i++){
        if($scores[$i] <=42 && $scores[$i] > $scores[$i+1]){
            $winner = $i;
        }
        else{
            $winner=$i+1;
        }
    }
    return $winner;    
}


$p1H = deal($deck,rand(4,6),0);
$p3H = deal($deck,rand(4,6),0);
$p2H = deal($deck,rand(4,6),0);
$p4H = deal($deck,rand(4,6),0);
?>

<html>
    <head>
        <title>   </title>
        <link rel="stylesheet" type="text/css" href="css/game.css">
    </head>
    <body>
        <h1>Silver Jack</h1>
        <div class = "container">
                <div class ="cardDisplay">
                    <p>
                        
                        <?php
                             echo "</br> <img class='playerImg' src='assets/Players/1.jpg' style=width:72px;height:96px  >   ";
            
                             displayPlayerHand($p1H);  
                             $ps1 = pScore($p1H);
                             echo "</br>";
                             echo'<span>'.$_POST["p1"] .'</span>';
                          
                             
                        ?>
                        
                    </p>
                  
                </div>
                <div class = "cardDisplay">
                    <p>
                        <?php
                        echo "</br> <img class = 'playerImg' src='assets/Players/2.jpg' style=width:72px;height:96px  >";
            
                            displayPlayerHand($p2H);
                             $ps2 = pScore($p2H);
                            echo "</br>";
                             echo '<span>'.$_POST["p2"].'</span>';
                        ?>
                    </p>
                </div>
                <div class ="cardDisplay">
                    <p>
                        <?php
                        echo "</br> <img class ='playerImg' src='assets/Players/3.jpg' style=width:72px;height:96px  >";
                        
                            displayPlayerHand($p3H);
                             $ps3 = pScore($p3H);
                            echo "</br>";
                              echo '<span>'. $_POST["p3"].'</span>';
                             
                        ?>
                    </p>
                </div>
                <div class="cardDisplay">
                    <p>
                        <?php
                        echo "</br> <img class ='playerImg'src='assets/Players/4.jpg' style=width:72px;height:96px  >";
                            echo "&nbsp;";
                            displayPlayerHand($p4H);
                            $ps4 = pScore($p4H);
                            
                            echo "</br>";
                            echo '<span>'. $_POST["p4"] .'</span>';
							
                             
                        ?>
                    </p>
                </div>
                <div class="pic2">
                 <?php 
                            echo "The winner is : ";
                            echo '<img class="winnerImg" src=" '.'assets/Players/'.winner($ps1,$ps2,$ps3,$ps4).'.jpg"'.'>';
                        ?>
                        
                </div>
                <div>
                    
                </div>
                        
                <div class = "submit">  
                <form action="game.php" method="POST">
                    <input type = "hidden" name="p1" value ="<?=$_POST["pl"]?>" />
                    <input type = "hidden" name="p2" value ="<?=$_POST["p2"]?>" />
                    <input type = "hidden" name="p3" value ="<?=$_POST["p3"]?>" />
                    <input type = "hidden" name="p4" value ="<?=$_POST["p4"]?>" />
                    <input type = "submit" value="Play Again?" style="font-size:25px" style="font-family:Georgia, serif" />
                </form>
                </div>
        </div>
    </body>
    
    
    
</html>

