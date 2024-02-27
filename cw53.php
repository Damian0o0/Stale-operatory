<!DOCTYPE html>
<html>
<head>
</head>
<body>
        <?php
        $x=500; 
        $y=300; 

        echo($x + $y); 
        echo("<br>"); 
        echo($x - $y); 
        echo("<br>"); 
        echo($x * $y); 
        echo("<br>"); 
        echo($x / $y); 
        echo("<br>"); 

        $x="TEXT"; 
        $y=300; 

        echo($x + $y); 
        echo("<br>"); 
        echo($x - $y); 
        echo("<br>"); 
        echo($x * $y); 
        echo("<br>"); 
        echo($x / $y); 
        echo("<br>"); 

        $x=500; 
        $y="TEXT"; 

        echo($x + $y); 
        echo("<br>"); 
        echo($x - $y); 
        echo("<br>"); 
        echo($x * $y); 
        echo("<br>"); 
        echo($x / $y); 
        echo("<br>");

    	echo ("Nie da się dodawać, odejmować, mnożyć i dzielić liczb z tekstem");
?> 
</body>
</html>
