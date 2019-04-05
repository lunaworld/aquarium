<?php echo form_open_multipart('feedbackctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>

    <fieldset style="width:250px">
        Content: <input type="text" name="Content" id="Content" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Name: <br><input type="text" name="Name" id="Name" style="width:200px"><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <span>Content:</span><span><?= ($Content ?? "") ?></span><br>
    <span>Name:</span><span><?= ($Name ?? "") ?></span><br>
    
<?php echo form_close(); ?><br/>