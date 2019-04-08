<?php echo form_open_multipart('eventctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
    <fieldset style="width:250px">
        NameEvent: <input type="text" name="NameEvent" id="NameEvent" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        ImageEvent: <input type="file" name="file_hinh" id="file_hinh" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        AgeAllow: <br><input type="text" name="AgeAllow" id="AgeAllow" style="width:200px"><br>
    </fieldset>
    <div class = "evviewall">
        <div>
            <fieldset style="width:250px">
                StartDate: <input type="text" name="StartDate" id="StartDate" style="width:200px"><br>
            </fieldset>
            <fieldset style="width:250px">
                EndDate: <input type="text" name="EndDate" id="EndDate" style="width:200px"><br>
            </fieldset>
        </div>
        <div>
            <fieldset style="width:250px">
                StartTime: <input type="text" name="StartTime" id="StartTime" style="width:200px"><br>
            </fieldset>
            <fieldset style="width:250px">
                EndTime: <input type="text" name="EndTime" id="EndTime" style="width:200px"><br>
            </fieldset>
        </div>
    </div>
    <fieldset style="width:250px">
        Description: <?php echo $this->ckeditor->editor("textarea name", "default textarea value"); ?><br>
    </fieldset>
    <fieldset style="width:250px">
        EventPrice: <input type="text" name="EventPrice" id="EventPrice" style="width:200px"><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <!-- <span>NameEvent:</span><span><?= ($NameEvent ?? "") ?></span><br>
    <span>ImageEvent:</span><span><?= ($ImageEvent ?? "") ?></span><br>
    <span>AgeAllow:</span><span><?= ($AgeAllow ?? "") ?></span><br>
    <span>StartDate:</span><span><?= ($StartDate ?? "") ?></span><br>
    <span>EndDate:</span><span><?= ($EndDate ?? "") ?></span><br>
    <span>StartTime:</span><span><?= ($StartTime ?? "") ?></span><br>
    <span>EndTime:</span><span><?= ($EndTime ?? "") ?></span><br>
    <span>Description:</span><span><?= ($Description ?? "") ?></span><br>
    <span>EventPrice:</span><span><?= ($EventPrice ?? "") ?></span><br> -->
    
<?php echo form_close(); ?><br/>