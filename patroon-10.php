

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
     
     for ($i=0; $i<9; $i++){
        
        for($j=0; $j<9; $j++){

        if ($i + $j == 8 || $i == $j ){
            print "<div class='bol'></div>";
        }
        elseif($j>$i && $i+$j < 8 || $i+$j > 8 && $i > $j){
             print "<div class='bolblauw'></div>";
        }
        else{
            print "<div class='bolgroen'></div>";
        }
    }
             echo "<br />";
 }
         
        
     

?>
</body>
</html>