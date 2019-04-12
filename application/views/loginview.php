<?php echo form_open('loginctrl/login'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Login successfully</h3><br>
<?php } ?>
    <fieldset style="width:250px">
        User Name: <input type="text" name="username" id="username" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Password: <br><input type="password" name="password" id="password" style="width:200px" required><br>
    </fieldset>
    <input type = 'submit' value = 'login'>

<?php echo form_close(); ?><br/>