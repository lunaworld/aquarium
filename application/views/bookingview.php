<?php echo form_open_multipart('bookingctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
    <div class = "bkviewall">
        <div>
            Event:        
            <select name="IDEvent" id="IDEvent"  required>
                <?php  

                foreach($events as $cat) {
                    ?>                    
                        <option value="<?php echo $cat['IDEvent'];?>"><?php echo $cat['NameEvent'];?></option>;
                    <?php
                }
                ?>
            </select>
            <br>
            <fieldset style="width:250px">
                NameCustomer: <input type="text" name="NameCustomer" id="NameCustomer" style="width:200px" required><br>
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

    <fieldset >
        Address: <input type="text" name="Address" id="Address" ><br>
    </fieldset>
    <fieldset >
        Note: 
        <textarea rows="4" name="Note" id="Note">
        </textarea><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

<?php echo form_close(); ?><br/>