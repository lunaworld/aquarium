<?php echo form_open_multipart('bookingctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>

    <fieldset >
        IDEvent: <input type="number" name="IDEvent" id="IDEvent"  required><br>
    </fieldset>
    <fieldset >
        NameCustomer: <input type="text" name="NameCustomer" id="NameCustomer"  required><br>
    </fieldset>
    <fieldset >
        ImageCustomer: <input type="file" name="file_hinh" id="file_hinh"  required><br>
    </fieldset>
    <fieldset >
        Phone: <br><input type="text" name="Phone" id="Phone" ><br>
    </fieldset>
    <fieldset >
        Mail: <br><input type="text" name="Mail" id="Mail" ><br>
    </fieldset>
    <fieldset >
        StartDate: <input type="text" name="StartDate" id="StartDate" ><br>
    </fieldset>
    <fieldset >
        EndDate: <input type="text" name="EndDate" id="EndDate" ><br>
    </fieldset>
    <fieldset >
        StartTime: <input type="text" name="StartTime" id="StartTime" ><br>
    </fieldset>
    <fieldset >
        EndTime: <input type="text" name="EndTime" id="EndTime" ><br>
    </fieldset>
    <fieldset >
        Address: <input type="text" name="Address" id="Address" ><br>
    </fieldset>
    <fieldset >
        Note: <input type="text" name="Note" id="Note" ><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <span>IDEvent:</span><span><?= ($IDEvent ?? "") ?></span><br>
    <span>NameCustomer:</span><span><?= ($NameCustomer ?? "") ?></span><br>
    <span>ImageCustomer:</span><span><?= ($ImageCustomer ?? "") ?></span><br>
    <span>Phone:</span><span><?= ($Phone ?? "") ?></span><br>
    <span>Mail:</span><span><?= ($Mail ?? "") ?></span><br>
    <span>StartDate:</span><span><?= ($StartDate ?? "") ?></span><br>
    <span>EndDate:</span><span><?= ($EndDate ?? "") ?></span><br>
    <span>StartTime:</span><span><?= ($StartTime ?? "") ?></span><br>
    <span>EndTime:</span><span><?= ($EndTime ?? "") ?></span><br>
    <span>Address:</span><span><?= ($Address ?? "") ?></span><br>
    <span>Note:</span><span><?= ($Note ?? "") ?></span><br>
    
<?php echo form_close(); ?><br/>