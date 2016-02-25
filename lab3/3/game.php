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
                
                
$cards = ["suit"=="", "number" => " "];

function populateDeck(){
    //insert card assets into cards array    

}

?>

<html>
    <head>
        <title>   </title>
    </head>
    <body>
        
        <?php
            var_dump($table);
        ?>
        <!--<a href="game.php" > Play Again?</a>-->
        <form action="game.php" method="post" />
        <input type = "hidden" name="p1" value ="<?=$_POST["pl"]?>" />
        <input type = "hidden" name="p2" value ="<?=$_POST["p2"]?>" />
        <input type = "hidden" name="p3" value ="<?=$_POST["p3"]?>" />
        <input type = "hidden" name="p4" value ="<?=$_POST["p4"]?>" />
        <input type = "submit" value="Play Again?" />
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