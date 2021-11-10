<?php
$error = '';
if (isset($_GET['errorCode'])) {
    switch ($_GET['errorCode']) {
        case 1:
            $error = '*Wrong email or password';
            break;
        case 2:
            $error = '*User is not approved';
            break;
        default:
            $error = '';
    }
}
?>
<div class="container container-login">
    <h1 class="title title-primary-login">LOGIN</h1>
    <form action="http://localhost/ntpws/server/action.php" method="post" class="form form-login">
        <label for="email">Email: </label><br>
        <input type="email" id="email" name="email" class="input input-login" required><br>
        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password" class="input input-login" required><br>
        <span><small class="small small-error"><?php echo $error . '<br>' ?></small></span>
        <input type="submit" name="submit" value="Login">
    </form>
</div>
<!--TODO: fix this hack-->
<br>
<br>
<br>
<br>
<!--TODO: fix this hack-->