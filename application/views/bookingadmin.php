<style>
    .booking-grid {
        display:grid;
        grid-template-columns: 12% 12% 12% 12% 12% 40%;
    }
</style>
<div class ='bookingadmin'>
    <?php
        ?>
        <div class = 'booking-grid'>
            <div>
                Name
            </div>
            <div>
                Phone
            </div>
            <div>
                Mail
            </div>
            <div>
                Event
            </div>
            <div>
                Status
            </div>
            <div>
                Note
            </div>
        </div>
        <?php
        foreach($bookings as $booking) {
            echo "<div class ='booking-grid'>";
                echo "<div>";
                echo $booking['NameCustomer'];
                echo "</div>";
                echo "<div>";
                echo $booking['Phone'];
                echo "</div>";
                echo "<div>";
                echo $booking['Mail'];
                echo "</div>";
                echo "<div>";
                foreach($events as $event){
                    if($booking['IDEvent'] == $event['IDEvent']){
                        echo $event['NameEvent'];
                        break;
                    }
                    
                }
                echo "</div>";
                echo "<div>";
                echo $booking['status'];
                echo "</div>";
                echo "<div>";
                echo $booking['Note'];
                echo "</div>";
                
            echo "</div>";
        }
    ?>
</div>