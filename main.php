<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriцa</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="./img/Mortal_kombat_logo.png" alt="MortalKombat" class="header_logo">
            <nav>
                <ul class="ul_navigation">
                    <li><a href="">Home</a></li>
                    <li><a href="">Repository</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Help</a></li>
                </ul>
            </nav>
        </div>
        <div class="scorpion_block">
            <img src="./img/scorpion-mortal-kombat.jpg" alt="" class="backgroundAboutMe">
            <div class="scorpion_content">
                <?php include './index.php'?>
                <h1><?php echo $hello?></h1>
                <h3><?php echo 'Меня зовут' . ' ' . $name . ' ' . 'a.k.a' . ' ' . $surname ?></h3>
                <h3><?php echo 'Возраст:' . ' ' . $age ?></h3>
                <p class="scorpion_history"><?php echo $history?></p>
                <h2>Для связи со мной --></h2>
                <?php include './form.php'?>
            </div>
            <?php include './footer.php'?>
        </div>
    </div>
</body>
</html>