<?php echo form_open_multipart('animalctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>

    <fieldset style="width:250px">
        IDAnimal: <input type="number" name="IDAnimal" id="IDAnimal" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        IDCategory: <input type="number" name="IDCategory" id="IDCategory" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        NameAnimal: <input type="text" name="NameAnimal" id="NameAnimal" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        Age: <br><input type="text" name="Age" id="Age" style="width:200px"><br>
    </fieldset>
    <fieldset style="width:250px">
        Size: <br><input type="text" name="Size" id="Size" style="width:200px"><br>
    </fieldset>
    <fieldset style="width:250px">
        Description: <input type="text" name="Description" id="Description" style="width:200px"><br>
    </fieldset>
    <fieldset style="width:250px">
        ImageName: <input type="file" name="file_hinh" id="file_hinh" style="width:200px" required><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <span>IDAnimal:</span><span><?= ($IDAnimal ?? "") ?></span><br>
    <span>IDCategory:</span><span><?= ($IDCategory ?? "") ?></span><br>
    <span>NameAnimal:</span><span><?= ($NameAnimal ?? "") ?></span><br>
    <span>Age:</span><span><?= ($Age ?? "") ?></span><br>
    <span>Size:</span><span><?= ($Size ?? "") ?></span><br>
    <span>Description:</span><span><?= ($Description ?? "") ?></span><br>
    <span>ImageName:</span><span><?= ($ImageName ?? "") ?></span><br>
    
<?php echo form_close(); ?><br/>