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
<<<<<<< HEAD
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
=======
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
>>>>>>> e084276654eeb0075d6449fbff8805269070d95e
    </fieldset>
    <fieldset >
        EventPrice: <input type="number" name="EventPrice" id="EventPrice" ><br>
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