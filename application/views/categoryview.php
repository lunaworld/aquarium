<?php echo form_open_multipart('categoryctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>

    <fieldset style="width:250px">
        CategoryName: <input type="text" name="CategoryName" id="CategoryName" style="width:200px" required><br>
    </fieldset>
    <fieldset style="width:250px">
        SpeciesInfomaton: <?php echo $this->ckeditor->editor("textarea name", "default textarea value"); ?><br>
    </fieldset>
    <fieldset style="width:250px">
        ImageCategory: <input type="file" name="file_hinh" id="file_hinh" style="width:200px" required><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <!-- <span>CategoryName:</span><span><?= ($CategoryName ?? "") ?></span><br>
    <span>SpeciesInfomaton:</span><span><?= ($SpeciesInfomaton ?? "") ?></span><br>
    <span>ImageCategory:</span><span><?= ($ImageCategory ?? "") ?></span><br> -->
    
<?php echo form_close(); ?><br/>