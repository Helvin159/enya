    <div class="container">
        <div class="row py-5 calendar">
            <?php 
                // Variables
                $count = 0;
                $btnId = 40;
                $dayId = 230;
                $nameId = 75;
                $emailId = 120;
                $phoneId = 150;
                $timeId = 190;
                $day = date('D');
                $month = date('m');
                $year = date('Y');
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

                // Get days
                $query_date = "01-$month-$year";
                $firstDayOfTheMonth = date('l', strtotime($query_date));
                
                // Weekly setup
                $week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                $firstOfTheMonthkey = array_search($firstDayOfTheMonth, $week);

                while($count < $daysInMonth){ 
                    $count++; 
                    $btnId++;
                    $nameId++;
                    $emailId++;
                    $phoneId++;
                    $timeId++;
                    $dayId++;
            ?>
            <!-- Column for each day of the month -->
                        <div  class="col-md-2 py-4 days 
                            <?php 
                                if($count < date('j')){ 
                                    echo 'previousDateOverlay';
                                }; 
                                if($count == date('j')){ 
                                    echo 'todayBg'; 
                                } 
                            ?>">
                            <div class="container">
                                <h5 class="<?php if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?>" >
                                    <?php
                                        if($count <= 1){ 
                                            $week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                            $firstOfTheMonthkey = array_search($firstDayOfTheMonth, $week);
                                            echo $week[$firstOfTheMonthkey];
                                            $firstOfTheMonthkey++;
                                        }
                                        else if($count >= 1){ 
                                            echo $week[$firstOfTheMonthkey];
                                            $firstOfTheMonthkey++;
                                            if($firstOfTheMonthkey == 7){
                                            $firstOfTheMonthkey = 0;
                                            }
                                        } 
                                    ?>
                                </h5>
                            </div>
                            <div id="<?php echo $count; ?>" class="container day  <?php if($count < date('j')){ echo ' ';}else{ echo 'openTime '; }; if($count == date('j')){ echo 'todayFont'; } ?>   ">
                                <i id="<?php echo "$btnId"; ?>" class="far fa-times-circle <?php if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?> text-right closeBtn fontSize22"></i>
                                <p  class="px-5 fontSize28"><?php echo $count; ?></p>  
                                <div class="agenda  text-center">
                                    <input id="<?php echo $dayId; ?>"  type="hidden" value="<?php echo $count;?>">
                                    <input id="<?php echo $nameId; ?>" class="inputFields" type="text" name="name" placeholder="Anne Doe"> 
                                    <input id="<?php echo $phoneId; ?>" class="inputFields" type="tel" name="phoneNumber" placeholder="(978)888-8888">  
                                    <input id="<?php echo $emailId; ?>"  class="inputFields" type="email" name="email" placeholder="Email"> 
                                    <input id="<?php echo $timeId; ?>" class="inputFields" type="time" name="time" >
                                    
                                    <div class="container py-2">
                                        <button  href="#" type="none"  class="bookSesh btn button <?php  if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?>">
                                        Book
                                        </button>
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                <?php } ?>
                <div class="previousDateOverlay"></div>
            </div>
        </div>
        <div class="container py-5 hideContent thankYou text-center">
            <h1 class="display-4 p-5">Thank You! <br> We'll be in touch as soon as possible!</h1>
        </div>
    </div>