<?php 
include_once('./src/connect.php');
$id = $_SESSION['id'];
echo $id;

$sql = mysqli_query($conn, "SELECT name, user, password FROM users WHERE id = $id ");
$data = mysqli_fetch_assoc($sql);
?>

<div class="formsContainer">
    <form id="formAlterData" action="/loginupdate" method="POST">
        <span class="title">alterar dados</span>
        <div class="inputContainer">
            <span>name</span>
            <input type="text" value="<?php echo $data['name'];?>" name="name" placeholder="name">
        </div>
        <div class="inputContainer">
            <span>user</span>
            <input type="text" value="<?php echo $data['user'];?>" name="user" placeholder="user" autocomplete="off">
        </div>
        <div class="inputContainer">
            <span>current password</span>
            <input type="password" name="currentPassword" placeholder="current password" required autocomplete="off">
        </div>
        <div class="inputContainer">
            <span>new password</span>
            <input type="password" name="newPassword" placeholder="new password" required autocomplete="off">
        </div>
        <div class="inputContainer">
            <span>confirm the new password</span>
            <input type="password" name="confirmPassword" placeholder="confirm the new password" required autocomplete="off">
        </div>
        <input id="saveDataBtn" type="submit" name="send" value="save data">

    </form>
</div>