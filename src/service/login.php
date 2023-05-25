<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/navBar.css">
    <link rel="stylesheet" href="./src/css/login.css">
    <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include_once('./src/include/navBar.php'); ?>

        <main>
            <div id="formContainerLogin">
                <form action="/loginVerification">
                    <div class="inputContainer">
                        <span>user</span>
                        <input type="text" name="user" placeholder="user" required>
                    </div>
                    <div class="inputContainer">
                        <span>password</span>
                        <input type="text" name="password" placeholder"password" required>
                    </div>
                    <button>login</button>
                </form>
                <span>don't have an account?</span>
            </div>
        </main>

        <?php include_once('./src/include/footer.php'); ?>
    </div>
</body>

</html>