<?php echo form_open_multipart('registionctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>

    <fieldset style="width:250px">
        Name: <br><input type="text" name="Name" id="Name" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        User Name: <input type="text" name="username" id="username" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Password: <br><input type="password" name="password" id="password" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Email: <br><input type="text" name="Email" id="Email" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Image User: <br><input type="file" name="file_hinh" id="file_hinh" style="width:200px" required><br>
    </fieldset>

    <div><button name="btaccept" id="btnaccept">Accept</button></div>

    <!-- <span>First Name:</span><span><?= ($FirstName ?? "") ?></span><br>
    <span>Last Name:</span><span><?= ($LastName ?? "") ?></span><br>
    <span>User Name:</span><span><?= ($username ?? "") ?></span><br>
    <span>Password:</span><span><?= ($password ?? "") ?></span><br>
    <span>Email:</span><span><?= ($Email ?? "") ?></span><br> -->

<?php echo form_close(); ?><br/>