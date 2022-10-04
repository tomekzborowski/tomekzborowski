<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   //grupa B<br>
    
    <?php
   $tab = array();
   for($i=1;$i<=49;$i++)
   {
     $tab[] = $i;
   }
    
    preg_match_all("/1/", serialize($tab), $wynik);
    $licznik = count($wynik[0]);
    echo $licznik;

    ?>
</body>
</html>