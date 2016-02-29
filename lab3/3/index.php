<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack.</title>
        <link rel="stylesheet" type="text/css" href="css/game.css" >
    </head>
    <body>
        
        <div class ="container">
            <div>
                
                <p>Welcome to Silver Jack. Enter the names of four players to test your luck.</p>
                <p>The rules:
                    <ul>
                        <li>Each player gets 4-6 cards.</li>
                        <li>All cards from the same deck (so no duplicates sorry).</li>
                        <li>Whoever gets closest to the number <em>42</em> wins!</li>
                        <li>If you go over, you lose. </li>
                        <li>Good luck!</li>
                    </ul>
                </p>
                <form action="game.php" method="POST">
                    <div>
                        <label>Player 1:</label><input type="text" name="p1" />
                        <div />
                     <div>
                         <label>Player 2:</label><input type="text" name="p2" />
                         <div />
                      <div>
                          <label>Player 3:</label><input type="text" name="p3" />
                          <div />
                       <div>
                           <label>Player 4:</label><input type="text" name="p4" />
                           <div />
                    
                    <input type="submit" value="Go!" />
        
                </form> 
            </div>
        </div>
        
        
    </body>
</html>


<?php

?>