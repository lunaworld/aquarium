<style>
input,textarea {
    width:100%;
}
.dddd {
    clear:both;
}
</style>
<div class ='asd'>
<?php echo form_open_multipart('bookingctrl'); ?>

<?php if (isset($message)) { ?>

<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
            <div class ='dddd'>
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
            </div>
    <div class = "bkviewall">
        <div>
            <div >
                NameCustomer: <input  type="text" name="NameCustomer" id="NameCustomer"  required><br>
            </div>
        </div>
        <div>
            <div class = "bkview1">
                <div >
                    Phone: <br><input type="text" name="Phone" id="Phone" ><br>
                </div>
                <div >
                    Mail: <br><input type="text" name="Mail" id="Mail" ><br>
                </div>
               
                
            
        </div>

        </div>
        <div >
        Address: <input type="text" name="Address" id="Address" ><br>
        </div>
        <div >
        Note: 
        <textarea rows="4" name="Note" id="Note">
        </textarea><br>
        </div>
    

    <div><button name="btsave" id="btnsave">Book</button></div>

<?php echo form_close(); ?><br/>

</div>