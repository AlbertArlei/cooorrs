<?php
include_once('./src/connect.php');
$id = $_SESSION['id'];

$sql = mysqli_query($conn, "SELECT name, user, password FROM users WHERE id = $id ");
$data = mysqli_fetch_assoc($sql);
?>

<div class="formsContainer">
    <form id="formAlterData" action="/loginupdate" method="POST">
        <span class="title">change data</span>
        <div class="inputContainer">
            <span>name</span>
            <input id="inputName" type="text" value="<?php echo $data['name']; ?>" name="name" placeholder="name">
        </div>
        <div class="inputContainer">
            <span>user</span>
            <input id="inputUser" type="text" value="<?php echo $data['user']; ?>" name="user" placeholder="user" autocomplete="off">
        </div>
        <span id="show" class="material-symbols-outlined">
            expand_more
        </span>
        <div class="passwordContainer">
            <div class="inputContainer">
                <span>current password</span>
                <input id="inputCurrentPassword" type="password" name="currentPassword" placeholder="current password" autocomplete="off">
            </div>
            <div class="inputContainer">
                <span>new password</span>
                <input id="inputPassword" type="password" name="newPassword" placeholder="new password" autocomplete="off">
            </div>
            <div class="inputContainer">
                <span>confirm the new password</span>
                <input id="inputConfirmPassword" type="password" name="confirmPassword" placeholder="confirm the new password" autocomplete="off">
            </div>
        </div>

        <input id="saveDataBtn" type="submit" name="send" value="save data">
        <?php
              if($_SESSION['loginMsg'] != false){
                echo $_SESSION['loginMsg'];
                $_SESSION['loginMsg'] = false;
            }
            ?>
    </form>
</div>