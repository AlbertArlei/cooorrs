<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/navBar.css">
    <link rel="stylesheet" href="./src/css/service.css">
    <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include_once('./src/include/navBar.php');?>
        <div class="servicesContainer">
            <a class="serviceLinkContainer" href="/border"><span >border generator</span></a>
            <a class="serviceLinkContainer" href="/flexbox"><span >flexbox</span></a>
            <a class="serviceLinkContainer" href="/login"><span >login</span></a>
        </div>
        
        <?php include_once('./src/include/footer.php');?>
    </div>
</body>
</html>