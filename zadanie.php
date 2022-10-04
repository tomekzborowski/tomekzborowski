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
        function liczenie($tab,$x)
        {
            for($i = 0; $i <=20; $i++)
            {
                $tab[$i] = rand(1,10);
            }
            for($i = 0; $i <=20; $i++)
            {
                echo $tab[$i] . ' ';
                if($tab[$i] == 1)
                {
                    $x++;
                }
            }
            echo '<div> 1 było ' . $x . ' razy</div>';
        }
        $x = 0;
        $tab = [];
        liczenie($tab,$x);
    ?>
</body>
</html>