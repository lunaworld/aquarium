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
    
}
.div1{
    clear : both;
   
}
.div2{
  
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
    margin-left : 10%;
}
.div3{
    
}
.line1 {
    display:grid;
    grid-template-columns: 50% 50%;
}
</style>
<?php
echo "<div style = 'clear:both; padding-top:50px; padding-bottom:50px;width:80%;margin:auto;' class='all'>";     
        foreach($event as $row1) {
        echo "<div style = 'margin-top:50px;border:1px solid white'>";
        echo "<div class = 'line1'>";
            echo "<div class='div1'>";
                 echo "<img src ='";;
                echo base_url();
                echo "image/";
                echo $row1['ImageEvent'];            
                echo"'>";
            echo "</div>";
            echo "<div>";
                echo "<div style = 'margin-left: 10%;'><h2>"; 
                    echo $row1['NameEvent'];
                echo "</h2></div>";

                echo "<div  style = 'margin-left: 10%;'><h2>";
                    echo 'AgeAllow : ';
                    echo $row1['AgeAllow'];
                echo "</h2></div>";

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
            echo "</div>";
        echo "</div>";
            echo "<div class ='div3' style = 'border-top:1px solid white;'>";
                echo "<div><h2>"; 
                    echo 'Description : ';
                echo $row1['Description'];
                echo "</h2></div>";
            echo "</div>";
        echo "</div>";    
        }
echo "</div>";