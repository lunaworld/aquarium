<?php echo form_open_multipart('categoryctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
<div class = "align">
    <fieldset >
        CategoryName: <input type="text" name="CategoryName" id="CategoryName"  required><br>
    </fieldset>
    <fieldset >
        SpeciesInfomaton: <?php echo $this->ckeditor->editor("SpeciesInfomaton", "default textarea value"); ?><br>
    </fieldset>
    <fieldset >
        ImageCategory: <input type="file" name="file_hinh" id="file_hinh"  required><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <!-- <span>CategoryName:</span><span><?= ($CategoryName ?? "") ?></span><br>
    <span>SpeciesInfomaton:</span><span><?= ($SpeciesInfomaton ?? "") ?></span><br>
    <span>ImageCategory:</span><span><?= ($ImageCategory ?? "") ?></span><br> -->
</div>
<?php echo form_close(); ?><br/>