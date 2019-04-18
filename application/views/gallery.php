<?php
?>

<style>

.all {
    /* background-color : white; */
    clear : both;
    width:80%;
    margin:auto;
}
.total {
    /* background-color : DeepSkyBlue; */
    display : grid;
    grid-template-columns : 50% 50%;
    grid-column-gap: 2%;
}
.div1 {
    /* background-color : DarkTurquoise; */
    display : grid;
    grid-template-columns : 100%;
}
.column1 {
    border-style: solid;
    /* background-color : Blue; */
}
.column2 {
    border-style: solid;
    padding : 20px;
    /* background-color : LightSkyBlue; */
}
.div2 {
   position: absolute;
   opacity: 0;
   top:0%;
   color:white;
   width:100%;
   height:100%;
   text-align: left;
   transition: all 1s linear;
   overflow: hidden;
    /* background-color : DeepSkyBlue; */
}
.div2 div{
    padding-left: 10%;
}
.div2 p {
    text-align: left;
}
.hover {
    position: relative;
}
.hover:hover .div2 {
    opacity: 1;
    display: block;
    background: #2d5a6999;
}
</style>
<?php
echo "<div class='all'>";
    echo "<div class='total'>";
        foreach ($gallery as $div1) {
        echo "<div style = 'margin-top:50px' class = 'hover'>";
            echo "<div class='div1'>";
                echo "<div class='column1'>";
                    echo "<div>";
                        echo "<img style = 'height:300px; width:100%' src ='";
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
                echo "<div>";
                    echo $div1['Description'];
                echo "</div>";
            echo "</div>";    
        echo "</div>";
        }
    echo "</div>";
    

echo"</div>";