<style>
input,textarea {
    width:100%;
}
.dddd {
    clear:both;
}
</style>
<div style = 'width:50%; margin:auto;'>
<div>
    <h1> Booking Form</h1>
</div>
<div >
<?php echo form_open('bookingctrl'); ?>

<?php if (isset($message)) { ?>

<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
            <div >
                Event Name:<br />      
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
    <div>
        <div>
            <div >
                NameCustomer: <input  type="text" name="NameCustomer" id="NameCustomer"  required><br>
            </div>
        </div>
        <div>
            <div>
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
    

    <div style = 'padding-left:1px;margin-top:10px'><button style = 'background: #6afe61; height: 30px;'name="btsave" id="btnsave">Book</button></div>

<?php echo form_close(); ?><br/>

</div>
</div>