<?php echo form_open_multipart('loginctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Login successfully</h3><br>
<?php } ?>
    <fieldset style="width:250px">
        User Name: <input type="text" name="username" id="username" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Password: <br><input type="password" name="password" id="password" style="width:200px" required><br>
    </fieldset>

    <div><button name="btlogin" id="btnlogin">Login</button></div>
    <div><button name="btlogout" id="btnlogout">Logout</button></div>

    <span>User Name:</span><span><?= ($username ?? "") ?></span><br>
    <span>Password:</span><span><?= ($password ?? "") ?></span><br>

<?php echo form_close(); ?><br/>