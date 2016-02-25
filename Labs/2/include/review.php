<!DOCTYPE html>
<html>
    <head>
        <title>PHP Preview</title>
    </head>
    <body>
        <h1><?= "TMNT Store"?> </h1>
        <?php
             
            
            
            for($i = 0;$i<10;$i++){
                $jackUpPricing();
                echo "<br /> <br/>";
            }
        
            function jackUpPricing () {
                $product = "Raphael Costume";
             $price = rand(1,100)+rand(0,99)/100;
             $taxRate1 = 0.0825;
             $taxRate2 = 0.9000;
             $taxRate3 = 2.0000;
             $vatLevel1 = 30.0;
             $vatLeve2 = 50.0;
             
             echo "<div>\"$product\" <div>";
             echo "<div>$$price<div>";
             
            if($price >= $vatLevel2){
                
                $taxRate = $taxRate3;
            }            
            else if($price >= $vatLeve1){
                
                $taxRate =$taxRate2;
                
            }
            else {
                $taxRate = $taxRate1;
            }
            
            $totalPrice = $price*(1+$taxRate);
             $formTPrice = number_format($totalPrice,2);
             
             echo "<div> $$formTPrice </div>";
            echo "<div> Tax Rate: $taxRate </div>";
            }    
            
            ?>
            
    </body>
</html>