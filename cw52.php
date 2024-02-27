<!DOCTYPE html>
<html>
<head>
    <title>Zad7</title>
    <style>
        body {
            margin: 0 auto;
            width: 75%;
        }
        .radom{
            background-color: #000000;
        }
    </style>
</head>
<body>
    <?php
    define ('LOREM', 'Aenean suscipit luctus justo at pellentesque. Cras dignissim dapibus nisi, egestas tristique dui euismod eget. Ut tempor diam ut quam convallis, at mollis ipsum eleifend. Suspendisse ligula elit, porttitor nec tortor vitae, euismod semper lorem. Vestibulum at lorem ac purus elementum laoreet vitae sit amet purus. Donec sed lectus ante. Aliquam tempus nisl nec porttitor tempor.');

    echo LOREM;
    echo "<br>";
    
    echo "Tekst składa się z tylu wyrazów: ";
    echo str_word_count(LOREM);
    echo "<br>";

    echo "Tekst składa się z tyly liter: ";
    echo strlen(LOREM);
    echo "<br>";

    echo "Zamiana słów ipsum na RADOM: ";
    echo "<br>";
    $loreem = "ipsum";
    $ipsuum = '<font color="#FFFFFF" class="radom">RADOM</font>';

    echo str_replace($loreem,$ipsuum,LOREM);

    ?>

</body>
</html>