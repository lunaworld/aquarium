<?php echo form_open_multipart('bookingctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
    <div class = "bkviewall">
        <div>
            <fieldset style="width:250px">
                IDEvent: <input type="number" name="IDEvent" id="IDEvent" style="width:200px" required><br>
            </fieldset>
            <fieldset style="width:250px">
                NameCustomer: <input type="text" name="NameCustomer" id="NameCustomer" style="width:200px" required><br>
            </fieldset>
            <fieldset style="width:250px">
                ImageCustomer: <input type="file" name="file_hinh" id="file_hinh" style="width:200px" required><br>
            </fieldset>
        </div>
        <div>
            <div class = "bkview1">
                <fieldset style="width:250px">
                    Phone: <br><input type="text" name="Phone" id="Phone" style="width:200px"><br>
                </fieldset>
                <fieldset style="width:250px">
                    Mail: <br><input type="text" name="Mail" id="Mail" style="width:200px"><br>
                </fieldset>


                <fieldset style="width:250px">
                    StartDate: <input type="text" name="StartDate" id="StartDate" style="width:200px"><br>
                </fieldset>
                <fieldset style="width:250px">
                    EndDate: <input type="text" name="EndDate" id="EndDate" style="width:200px"><br>
                </fieldset>


                <fieldset style="width:250px">
                    StartTime: <input type="text" name="StartTime" id="StartTime" style="width:200px"><br>
                </fieldset>
                <fieldset style="width:250px">
                    EndTime: <input type="text" name="EndTime" id="EndTime" style="width:200px"><br>
                </fieldset>
            </div>
            <div class = "bkview2">
                <fieldset style="width:250px">
                    Address: <input type="text" name="Address" id="Address" style="width:200px"><br>
                </fieldset>
                <fieldset style="width:250px">
                    Note: <input type="text" name="Note" id="Note" style="width:200px"><br>
                </fieldset>
            </div>
        </div>
    </div>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <!-- <span>IDEvent:</span><span><?= ($IDEvent ?? "") ?></span><br>
    <span>NameCustomer:</span><span><?= ($NameCustomer ?? "") ?></span><br>
    <span>ImageCustomer:</span><span><?= ($ImageCustomer ?? "") ?></span><br>
    <span>Phone:</span><span><?= ($Phone ?? "") ?></span><br>
    <span>Mail:</span><span><?= ($Mail ?? "") ?></span><br>
    <span>StartDate:</span><span><?= ($StartDate ?? "") ?></span><br>
    <span>EndDate:</span><span><?= ($EndDate ?? "") ?></span><br>
    <span>StartTime:</span><span><?= ($StartTime ?? "") ?></span><br>
    <span>EndTime:</span><span><?= ($EndTime ?? "") ?></span><br>
    <span>Address:</span><span><?= ($Address ?? "") ?></span><br>
    <span>Note:</span><span><?= ($Note ?? "") ?></span><br> -->
    
<?php echo form_close(); ?><br/>