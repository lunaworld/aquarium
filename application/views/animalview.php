<style>
    .animal-grid {
        display:grid;
        grid-template-columns: 10% 10% 10% 50% 20%;
    }
    p{
        text-align: left;
    }
</style>
<?php echo form_open_multipart('animalctrl'); ?>

<?php if (isset($message)) { ?>
<h3 style="color:green;">Save successfully</h3><br>
<?php } ?>
<div class = "align">
    
        Category: 
        
        <select name="IDCategory" id="IDCategory"  required>
            <?php  

                foreach($category as $cat) {
                    ?>                    
                        <option value="<?php echo $cat['IDCategory'];?>"><?php echo $cat['CategoryName'];?></option>;
                    <?php
                }
            ?>
        </select>
        <br>
  
    <fieldset >
        NameAnimal: <input type="text" name="NameAnimal" id="NameAnimal"  required><br>
    </fieldset>
    <fieldset >
        Age: <br><input type="text" name="Age" id="Age" ><br>
    </fieldset>
    <fieldset >
        Size: <br><input type="text" name="Size" id="Size" ><br>
    </fieldset>
    <fieldset >
        Description: <?php echo $this->ckeditor->editor("Description", "default textarea value"); ?><br>
    </fieldset>
    <fieldset >
        ImageName: <input type="file" name="file_hinh" id="file_hinh"  required><br>
    </fieldset>

    <div><button name="btsave" id="btnsave">Save</button></div>

    <!-- <span>IDCategory:</span><span><?= ($IDCategory ?? "") ?></span><br>
    <span>NameAnimal:</span><span><?= ($NameAnimal ?? "") ?></span><br>
    <span>Age:</span><span><?= ($Age ?? "") ?></span><br>
    <span>Size:</span><span><?= ($Size ?? "") ?></span><br>
    <span>Description:</span><span><?= ($Description ?? "") ?></span><br>
    <span>ImageName:</span><span><?= ($ImageName ?? "") ?></span><br> -->
</div>
    
<?php echo form_close(); ?><br/>

<h1 style = 'margin-top:80px; margin-bottom:30px;text-align:center'>
All animal
</h1>
<div>
    <div class = 'animal-grid'>
        <div>
        Name    
        </div>
        <div>
        Age    
        </div>
        <div>
        Size    
        </div>
        <div>
        Description    
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
            <?php echo $animal['NameAnimal'];?>
        </div>
        <div>
            <?php echo $animal['Age'];?>
        </div>
        <div>
            <?php echo $animal['Size'];?>
        </div>
        <div>
            <?php echo $animal['Description'];?>
        </div>
        <div>
            <button style ='background:tomato;border-radius:2px;'>delete</button>
        </div>
    </div>
    <?php
    }
?>            
</div>