<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="number" name="Wzrost" placeholder="Podaj wzrost:"><br>
        <input type="number" name="Waga" placeholder="Podaj wage:"><br>
        <input type="submit" value="Oblicz">
    </form>
    <?php
        
    $wzrost = $_POST['Wzrost']; 
    $waga = $_POST['Waga'];
     
    echo 'Wzrost: ' . $wzrost . 'cm <br />';
    echo 'Waga: ' . $waga . 'kg  <br />';
     
   
    $bmi = $waga/($wzrost/100*$wzrost/100);
     
    echo 'BMI: ' . $bmi . '<br />';
     

    if($bmi >= 17.5 && $bmi <= 18.4)     
        echo 'Niedowaga'; 
    elseif($bmi >= 18.5 && $bmi <= 24.9)     
        echo 'Wartość prawidłowa'; 
    elseif($bmi >= 25 && $bmi <= 29.9)     
        echo 'Nadwaga'; 
    
    ?>
</body>
</html>