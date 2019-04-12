<?php
// $event = array();
// $event[] = array("IDEvent"=>147, "ImageEvent"=>'ImageEvent.jpg', "StartDate"=>'23/03/2019', "EndDate"=>'24/03/2019',
//  "StartTime"=>'6h30', "EndTime"=>'19h30', 'NameEvent'=>'Aquarium Event', "Description"=>'Mo ta', 
//  "AgeAllow"=>'12-16', "EventPrice"=>'60$');
 
?>
<style>
img {
    width:100%;
}
.all{
    background-color : cyan;
}
.div1{
    background-color : deepskyblue;
}
.div2{
    background-color : darkturquoise;
}
.row1{
    margin-left : 10%;
    display : grid;
    grid-template-columns : 50% 50%;
}
.row2{
    margin-left : 10%;
    display : grid;
    grid-template-columns : 50% 50%;
}
.row3{
    margin-left : 10%;
    display : grid;
    grid-template-columns : 50% 50%;
}
.row4{
    margin-left : 30%;
}
.div3{
    margin-left : 10%;
    background-color : deepskyblue;
}
</style>
<?php
echo "<div class='all'>";
    echo "<div class='div1'>";
        echo "<div>";
        echo "<img src ='ImageEvent.jpg";
        echo"'>";
    echo "</div>";
    
    echo "<div class='div2'>";
        echo "<div class='row1'>";
        
        foreach($event as $row1) {
 
            echo "<div><h2>"; 
                echo $row1['NameEvent'];
            echo "</h2></div>";

            echo "<div><h2>";
                echo 'AgeAllow : ';
                echo $row1['AgeAllow'];
            echo "</h2></div>";
        echo "</div>";

        echo "<div class='row2'>";
            echo "<div><h2>"; 
                echo 'Start Date : ';
                echo $row1['StartDate'];
            echo "</h2></div>";

            echo "<div><h2>"; 
                echo 'End Date : ';
                echo $row1['EndDate'];
            echo "</h2></div>";
        echo "</div>";
    
        echo "<div class='row3'>";
            echo "<div><h2>"; 
                echo 'Start Time : ';
                echo $row1['StartTime'];
            echo "</h2></div>";

            echo "<div><h2>"; 
                echo 'End Time : ';
                echo $row1['EndTime'];
            echo "</h2></div>";
        echo "</div>";

        echo "<div class='row4'>";
            echo "<div><h2>"; 
                echo 'Price : ';
                echo $row1['EventPrice'];
            echo "</h2></div>";
        echo "</div>";
        }
    echo "</div>";

    echo "<div class ='div3'>";
        echo "<div><h2>"; 
            echo 'Description : ';
            echo $row1['Description'];
        echo "</h2></div>";
    echo "</div>";


echo "</div>";