<style>
    .animal-grid {
        display:grid;
        grid-template-columns: 10%  70% 20%;
    }
    p{
        text-align: left;
    }
</style>

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


<h1 style = 'margin-top:80px; margin-bottom:30px;text-align:center'>
All Category
</h1>
<div>
    <div class = 'animal-grid'>
        <div>
        Category Name    
        </div>
        <div>
        Species Infomaton    
        </div>
        <div>
        Operator    
        </div>
    </div>
<?php
    foreach($animals as $animal) {
    ?>    
        <div class ='animal-grid'>
        <div>
            <?php echo $animal['CategoryName'];?>
        </div>
        <div>
            <?php echo $animal['SpeciesInfomaton'];?>
        </div>
        <div>
            <button style ='background:tomato;border-radius:2px;'>delete</button>
        </div>
    </div>
    <?php
    }
?>            
</div>