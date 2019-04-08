<?php echo form_open_multipart('eventctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
    <fieldset >
        NameEvent: <input type="text" name="NameEvent" id="NameEvent"  required><br>
    </fieldset>
    <fieldset >
        ImageEvent: <input type="file" name="file_hinh" id="file_hinh"  required><br>
    </fieldset>
    <fieldset >
        AgeAllow: <br><input type="number" name="AgeAllow" id="AgeAllow" ><br>
    </fieldset>
    <fieldset >
        StartDate: <input type="date" name="StartDate" id="StartDate" ><br>
    </fieldset>
    <fieldset >
        EndDate: <input type="date" name="EndDate" id="EndDate" ><br>
    </fieldset>
    <fieldset >
        StartTime: <input type="time" name="StartTime" id="StartTime" ><br>
    </fieldset>
    <fieldset >
        EndTime: <input type="time" name="EndTime" id="EndTime" ><br>
    </fieldset>
    <fieldset >
        Description: <?php echo $this->ckeditor->editor("Description", "default textarea value"); ?><br>
    </fieldset>
    <fieldset >
        EventPrice: <input type="number" name="EventPrice" id="EventPrice" ><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <span>NameEvent:</span><span><?= ($NameEvent ?? "") ?></span><br>
    <span>ImageEvent:</span><span><?= ($ImageEvent ?? "") ?></span><br>
    <span>AgeAllow:</span><span><?= ($AgeAllow ?? "") ?></span><br>
    <span>StartDate:</span><span><?= ($StartDate ?? "") ?></span><br>
    <span>EndDate:</span><span><?= ($EndDate ?? "") ?></span><br>
    <span>StartTime:</span><span><?= ($StartTime ?? "") ?></span><br>
    <span>EndTime:</span><span><?= ($EndTime ?? "") ?></span><br>
    <span>Description:</span><span><?= ($Description ?? "") ?></span><br>
    <span>EventPrice:</span><span><?= ($EventPrice ?? "") ?></span><br>
    
<?php echo form_close(); ?><br/>