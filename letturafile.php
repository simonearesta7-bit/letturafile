<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fw = fopen("libri.txt", "r");
        if($fw == false){
            exit();
        }
        else{
            while(feof($fw) == false){
                $record = fgets($fw);
                echo $record;
                echo "<br>";
            }
            
            fclose($fw);
        }
        
    ?>
</body>
</html>