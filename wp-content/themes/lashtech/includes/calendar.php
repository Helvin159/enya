<div class="container">
        <div class="row py-5 calendar">
            <?php 
                $count = 0;
                $day = date('D');
                $month = date('m');
                $year = date('Y');
                // $timeIntervals = 45;
                $hours = 24;
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
                while($count < $daysInMonth){ 
                    $count++; ?>
                    <div  class="col-md-2 py-4 days  <?php if($count == date('n')){ echo 'todayBg'; } ?> " >
                    
                        <div class="container day <?php if($count == date('n')){ echo 'todayFont'; } ?>   ">
                            <button id="<?php echo $count; ?>" class="btn button dayBtns px-5"><?php echo $count; ?></button>  
                        </div>
                        <div class="container">
                            <div class="agenda container">
                                <select name="" id="">
                                    <?php 
                                        $hoursOfTheDay = 9;
                                        while($hoursOfTheDay < 20){ 
                                            $hoursOfTheDay++; ?>
                                                <option value="<?php echo $hoursOfTheDay.':00'; if($hoursOfTheDay < 12 ){ echo 'AM'; } else{ echo ' PM'; } ?>">
                                                    <?php
                                                        echo $hoursOfTheDay.':00'; 
                                                        if($hoursOfTheDay < 12 ){ echo ' AM'; } 
                                                        else{ echo ' PM'; } 
                                                    ?> 
                                            </option>                                         
                                        <?php }                 
                                    ?>
                                </select>                                       
                            </div>
                        </div>
                    </div>
                <?php 
                } ?>
            </div>
        </div>
    </div>