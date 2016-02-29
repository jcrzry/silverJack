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
function winner($ps1,$ps2,$ps3,$ps4){
    $scores = [$ps1,$ps2,$ps3,$ps4];
    for($i =0;i<count($scores)-1;$i++){
        if($scores[$i] <=42 && $scores[$i] < $scores[$i+1]){
            $winner = $i+1;
        }
        else{
            $winner=$i+2;
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
        <div class = "container">
                <div class ="cardDisplay">
                    <p>
                        <?php
                             displayPlayerHand($p1H);                  
                        ?>
                        
                    </p>
                </div>
                <div>
                    <p>
                        <?php
                            displayPlayerHand($p2H);
                        ?>
                    </p>
                </div>
                <div>
                    <p>
                        <?php
                            displayPlayerHand($p3H);
                        ?>
                    </p>
                </div>
                <div>
                    <p>
                        <?php
                            displayPlayerHand($p4H);
                        ?>
                    </p>
                </div>
            <form action="game.php" method="POST">
                <input type = "hidden" name="p1" value ="<?=$_POST["pl"]?>" />
                <input type = "hidden" name="p2" value ="<?=$_POST["p2"]?>" />
                <input type = "hidden" name="p3" value ="<?=$_POST["p3"]?>" />
                <input type = "hidden" name="p4" value ="<?=$_POST["p4"]?>" />
                <input type = "submit" value="Play Again?" />
            </form>
        </div>
        <?php
           //var_dump($table);
        ?>
        
    </body>
    
    
    
</html>


<!--shuffle(ards[])
    
//use flags to determine what cards have been dealt 
drawhand(int random, cards[])
//radom amount of cards(4-6) distributed to each player.
pops each card

getplayerImg()
//randomizes player image

duplicates()
//checks to make sure player hand has no puplicate cards
totalPoints(player,cards[])

checkWinner()
//compares user scores and displays winner. 
-->