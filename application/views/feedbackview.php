<?php echo form_open('feedbackctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
<div style = 'width:50%; margin:auto;'>
    <fieldset >
        Content:<br> <input type="text" name="Content" id="Content"  required><br>
    </fieldset>
    <fieldset >
        Name: <br><input type="text" name="Name" id="Name" ><br>
    </fieldset>

    <div style = 'padding-left:10px;margin-top:10px'><button style = 'background:aqua;line-height:25px'name="btsave" id="btnsave">Send</button></div>
</div>
    
<?php echo form_close(); ?><br/>