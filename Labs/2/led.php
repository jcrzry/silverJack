<?php




    function printLED(){
        return false;
    }
    
    function colorGenerator(){
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
    
    function printRow($c1,$c2,$c3,$c4,$c5,$c6,$c7){
        $rowArr = func_get_args();
        $rowStr =" <tr> ";
        for($i=0;i<count($rowArr);$i++){
            $color = colorGenerator();
            if($rowArr[i] == 1){
                $rowStr .= "<td style = " .$color ."> &nbsp; </td>";
            }
            else{
                $color=black;
                $rowStr.= "<td style= ".$color."> &nbsp; </td>";
                
            }
        }
        
        $rowStr .="</tr>";
        return $rowStr;
        
    }
     echo printRow(1,1,1,1,1,1,1);

    
    
    
    
    // function printChar($char){
       
    //     switch 'A':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         switch 'B':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         switch 'C':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         switch 'D':
    //         printRow(1,1,1,1,1,1,0);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,0);
    //         switch 'E':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,1,1,1,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         switch 'F':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,1,1,1,0,0);
    //         printRow(1,1,1,1,1,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         printRow(1,1,0,0,0,0,0);
    //         switch 'G':
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,1,1,1,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
    //         printRow(1,1,0,0,0,1,1);
        
    // }
    
    
?>