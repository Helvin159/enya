<div class="container">
        <div class="row py-5 calendar">
            <?php 
                $count = 0;
                $day = date('D');
                $month = date('m');
                $year = date('Y');
                $hours = 24;
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
                while($count < $daysInMonth){ 
                    $count++; ?>
                    <div class="col-md-2 py-4 days  <?php if($count == date('n')){ echo 'todayBg'; } ?> " >
                    
                        <div class="container day <?php if($count == date('n')){ echo 'todayFont'; } ?>   ">
                            <h4><?php echo $count; ?></h4>  
                        </div>
                        <div class="container">
                            <?php 
                                $hoursOfTheDay = 0;
                                while($hoursOfTheDay < 24){ 
                                    $hoursOfTheDay++; ?>
                                    <div class="agenda container">
                                        <p> <?php echo $hoursOfTheDay.':00'; if($hoursOfTheDay < 12 ){ echo ' AM'; } else{ echo ' PM'; } ?> </p> 
                                    </div>
                                <?php }                 
                           ?>
                        </div>
                    </div>
                <?php 
                } ?>
            </div>
        </div>
    </div>