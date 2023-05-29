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
            <div id="formsContainer">
                <form id="formLogin" action="/loginverification" method="POST">
                    <span class="title">login</span>
                    <div class="inputContainer">
                        <span>user</span>
                        <input type="text" name="user" placeholder="user" required>
                    </div>
                    <div class="inputContainer">
                        <span>password</span>
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <input type="hidden" name="login">
                    <input id="loginBtn" type="submit" value="login">
                    <span id="noAccount">don't have an account?</span>
                </form>

                <form id="formCreateAccount" action="/loginverification" method="POST">
                    <span class="title">create an account</span>
                    <div class="inputContainer">
                        <span>name</span>
                        <input type="text" name="name" placeholder="name">
                    </div>
                    <div class="inputContainer">
                        <span>user</span>
                        <input type="text" name="user" placeholder="user">
                    </div>
                    <div class="inputContainer">
                        <span>password</span>
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <input type="hidden" name="create">
                    <input id="createAccountBtn" type="submit" value="sign up">
                    <span id="login">sign in</span>
                </form>
            </div>
        </main>

        <?php include_once('./src/include/footer.php'); ?>
    </div>
    <script src="./src/js/login.js"></script>
</body>

</html>