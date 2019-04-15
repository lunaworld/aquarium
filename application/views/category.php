<?php
$category = array();
$category[] = array("IDCategory" => 450, "CategoryName" => 'Stripped Red Sea Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca1.jpg');
$category[] = array("IDCategory" => 451, "CategoryName" => 'Stripped Tropical Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca2.jpg');
$category[] = array("IDCategory" => 452, "CategoryName" => 'Green Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca3.jpg');
$category[] = array("IDCategory" => 453, "CategoryName" => 'Black Eye Rabbit Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca4.jpg');
$category[] = array("IDCategory" => 454, "CategoryName" => 'Tiger Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca5.jpg');
$category[] = array("IDCategory" => 455, "CategoryName" => 'Picasso Trigger Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca6.jpg');
$category[] = array("IDCategory" => 456, "CategoryName" => 'Emperor Red Snapper Fish', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca7.jpg');
$category[] = array("IDCategory" => 457, "CategoryName" => 'Egypt Napoleon Wrasse', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca8.jpg');
$category[] = array("IDCategory" => 458, "CategoryName" => 'Zebra Shark', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca9.jpg');
$category[] = array("IDCategory" => 459, "CategoryName" => 'Larabicus Quadrilineatus Wrasse', "SpeciesInfomaton" => 'Description', "ImageCategory" => 'ca10.jpg');
?>
<style>
.ctall {
    display : grid;
    grid-template-columns : auto auto auto auto auto;
    margin-left : 50px;
    border-style: solid;
}
</style>
<?php
    echo "<div class = 'ctall'>";
    foreach ($category as $ctall) {
        echo "<img src ='";;
        echo base_url();
        echo "image/";
        echo $ctall['ImageCategory'];
        echo"'style ='width:100%'>";
    }