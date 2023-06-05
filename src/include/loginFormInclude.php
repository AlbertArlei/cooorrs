<div class="formsContainer">
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
            <input type="text" name="name" placeholder="name" required autocomplete="off">
        </div>
        <div class="inputContainer">
            <span>user</span>
            <input type="text" name="user" placeholder="user" required autocomplete="off">
        </div>
        <div class="inputContainer">
            <span>password</span>
            <input type="password" name="password" placeholder="password" required autocomplete="off">
        </div>
        <input type="hidden" name="create">
        <input id="createAccountBtn" type="submit" value="sign up">
        <span id="login">sign in</span>
        <?php
        if (isset($_SESSION['loginMsg'])) {
            if($_SESSION['loginMsg'] != false){
                echo $_SESSION['loginMsg'];
            }
        }
        ?>
    </form>
</div>