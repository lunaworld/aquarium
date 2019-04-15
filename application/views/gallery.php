<?php
// $gallery = array();
// $gallery[] = array("IDAnimal"=> 111, "IDCategory"=> 450, "NameAnimal"=> 'Cá Voi', "Age"=> 64, "Size"=> '12m', "Description"=> 'Mô tả', "ImageName"=> 'cavoi.gif');
// $gallery[] = array("IDAnimal"=> 112, "IDCategory"=> 451, "NameAnimal"=> 'Bạch Tuộc', "Age"=> 32, "Size"=> '1m', "Description"=> 'Mô tả', "ImageName"=> 'bachtuoc.jpg');
// $gallery[] = array("IDAnimal"=> 113, "IDCategory"=> 452, "NameAnimal"=> 'Cua', "Age"=> 18, "Size"=> '50cm', "Description"=> 'Mô tả', "ImageName"=> 'cua.jpg');
// $gallery[] = array("IDAnimal"=> 114, "IDCategory"=> 453, "NameAnimal"=> 'Hải Cẩu', "Age"=> 23, "Size"=> '1m5', "Description"=> 'Mô tả', "ImageName"=> 'haicau.jpg');
// $gallery[] = array("IDAnimal"=> 115, "IDCategory"=> 454, "NameAnimal"=> 'Ốc Anh Vũ', "Age"=> 58, "Size"=> '70cm', "Description"=> 'Mô tả', "ImageName"=> 'ocanhvu.jpg');
// $gallery[] = array("IDAnimal"=> 116, "IDCategory"=> 455, "NameAnimal"=> 'Rắn Biển', "Age"=> 6, "Size"=> '1m', "Description"=> 'Mô tả', "ImageName"=> 'ranbien.jpg');
// $gallery[] = array("IDAnimal"=> 117, "IDCategory"=> 456, "NameAnimal"=> 'Rùa', "Age"=> 251, "Size"=> '1m4', "Description"=> 'Mô tả', "ImageName"=> 'rua.webp');
// $gallery[] = array("IDAnimal"=> 118, "IDCategory"=> 457, "NameAnimal"=> 'San Hô', "Age"=> 69, "Size"=> '2m', "Description"=> 'Mô tả', "ImageName"=> 'sanho.png');
// $gallery[] = array("IDAnimal"=> 119, "IDCategory"=> 458, "NameAnimal"=> 'Sứa', "Age"=> 45, "Size"=> '30cm', "Description"=> 'Mô tả', "ImageName"=> 'sua.jpg');
// $gallery[] = array("IDAnimal"=> 200, "IDCategory"=> 459, "NameAnimal"=> 'Sao Biển', "Age"=> 7, "Size"=> '60cm', "Description"=> 'Mô tả', "ImageName"=> 'saobien.jpg');
?>

<style>

.all {
    background-color : white;
    clear : both;
}
.total {
    background-color : black;
    display : grid;
    grid-template-columns : 25% 25% 25% 25%;
}
.div1 {
    background-color : DarkTurquoise;
    display : grid;
    grid-template-columns : 50% 50%;
}
.column1 {
    border-style: solid;
    background-color : Blue;
}
.column2 {
    border-style: solid;
    padding : 20px;
    background-color : LightSkyBlue;
}
.div2 {
    background-color : DeepSkyBlue;
}
</style>
<?php
echo "<div class='all'>";
    echo "<div >";
        foreach ($gallery as $div1) {
        echo "<div class='total'>";
            echo "<div class='div1'>";
                echo "<div class='column1'>";
                    echo "<div>";
                        echo "<img src ='";;
                        echo base_url();
                        echo "image/";
                        echo $div1['ImageName'];
                        
                        echo"'style ='width:100%'>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='column2'>";
                    echo "<div><h2>";
                        echo 'Animal Name : ';
                        echo $div1['NameAnimal'];
                    echo "</h2></div>";
                    echo "<div><h2>";
                        echo 'Age : ';
                        echo $div1['Age'];
                    echo "</h2></div>";

                    echo "<div><h2>";
                        echo 'Size : ';
                        echo $div1['Size'];
                    echo "</h2></div>";
                echo "</div>";
            echo "</div>";        
            echo "<div class='div2'>";
                echo "<div><h2>";
                    echo 'Description : ';
                    echo "</h2>";
                    echo "<div>";
                    echo $div1['Description'];
                    echo "</div>";
                echo "</div>";
            echo "</div>";    
        echo"</div>";        
        }
    echo "</div>";
    

echo"</div>";