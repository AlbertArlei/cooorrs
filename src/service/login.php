<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/navBar.css">
    <link rel="stylesheet" href="./src/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include_once('./src/include/navBar.php'); ?>
        
        <main>
            <?php if (isset($_SESSION['login']) === true) {
                if ($_SESSION['login'] === true) {
                    include_once('./src/include/loginUpdateInclude.php');
                    
                } else {
                    include_once('./src/include/loginFormInclude.php');
                }
            } else {
                include_once('./src/include/loginFormInclude.php');
            }?>

        </main>

        <?php include_once('./src/include/footer.php'); ?>
    </div>
    <?php echo'rola=>' . $_SESSION['a'];?>
    <script src="./src/js/login.js"></script>
    <script src="./src/js/loginFetch.js"></script>
</body>
</html>