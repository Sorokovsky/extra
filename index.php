<?php
    session_start();
    if ($_GET){
        $pass = $_SESSION['random'];
        if($_SESSION['try'] == 3){
            echo 'Ви програли';
        }
        elseif($pass == $_GET['num']){
            if($_SESSION['try'] == 0){
                echo "Ви справжній екстрасенс";
            }else{
                echo 'Ви вгадали з '. $_SESSION['try'] . ' спроби';
            }
        }else{
                $_SESSION['try'];
            echo 'Ви не вгадали спробуйте ще';
        }
        exit();        
    }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra</title>
</head>
<body>
        <select class='select' name="extra">
        <?php
            $_SESSION['random'] = rand(1, 10);
            $_SESSION['try'] = 0;
            for ($i = 1; $i <= 10; $i++) { 
                echo '<option selected="false" value="'.$i.'">'.$i.'</option>';
            }
        ?>
        </select>
     <p></p>
    <script src="script.js"></script>
</body>
</html>