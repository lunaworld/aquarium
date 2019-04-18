<?php
?>
<style>
.ctall { 
   
    clear : both;
    display : grid;
    grid-template-columns : 50% 50%;
    width:80%;
    margin:auto;
    grid-column-gap: 2%;
}
.ctimg {
    width : 100%;
    
}
.ctdiv {
    margin-top : 15px;
    border-style: solid;
    
    
    
}
.ctdc {
    
    width : 95%;
    margin : auto;
}
</style>

<?php
    echo "<div class = 'ctall'>";
    foreach ($category as $ctall) {
        echo "<div class = 'ctdiv'>";
            echo "<div >";    
                echo "<img style = 'height:300px' class ='ctimg' src ='";;
                echo base_url();
                echo "image/";
                echo $ctall['ImageCategory'];
                echo"'>";
            echo "</div>";

            echo "<div>";
                echo $ctall['SpeciesInfomaton'];
            echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    
    ?>

