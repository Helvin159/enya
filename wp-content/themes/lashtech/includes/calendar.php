    <div class="container">
        <div class="row py-5 calendar d-none">
            <?php 
                // Variables
                // ********************************************************************************
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
                // ********************************************************************************

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
                    $width = "14.285714285714286"
            ?>
            <!-- Column for each day of the month -->
            <!-- ******************************************************************************** -->
                        <div  class="cal col-lg-1 py-4 days 
                            
                            <?php
                            // ********************************************************************************
                            // Class below added if day is before today, or a background for today specifically
                                if($count < date('j')){ 
                                    echo 'previousDateOverlay';
                                }; 
                                if($count == date('j')){ 
                                    echo 'todayBg'; 
                                } 
                            // ********************************************************************************
                            ?>">
                            <div class="container">
                                <h5 class="<?php if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?>" >
                                    <?php
                                    // Loop each day of the week
                                    // ********************************************************************************
                                        if($count <= 1){ 
                                            $week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                            $firstOfTheMonthkey = array_search($firstDayOfTheMonth, $week);
                                            echo substr($week[$firstOfTheMonthkey], 0,3);
                                            $firstOfTheMonthkey++;
                                        }
                                        else if($count >= 1){ 
                                            // Checks count, if its 7, resents the week count to 0 in order to... 
                                            // start from Monday again
                                            // ************************************************************************
                                            echo substr($week[$firstOfTheMonthkey],0,3);
                                            $firstOfTheMonthkey++;
                                            if($firstOfTheMonthkey == 7){
                                            $firstOfTheMonthkey = 0;
                                            }
                                        } 
                                    ?>
                                </h5>
                            </div>

                            <div id="<?php echo $count; ?>" class="container day  
                            <?php
                            // Adds class based on the logic 
                            if($count < date('j')){ echo ' ';}else{ echo 'openTime '; }; if($count == date('j')){ echo 'todayFont'; } 
                            ?>"
                            >
                                <!-- Icon  -->
                                <i id="<?php echo "$btnId"; ?>" class="far fa-times-circle <?php if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?> text-right closeBtn fontSize22"></i>
                                    <!--  -->
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








        <div  class="container py-5 ">
            <label for="">
            Month <br> 
            <select name="month"  id="monthOptions">
                <option value="00">January</option>                            
                <option value="01">February</option>                            
                <option value="02">March</option>                            
                <option value="03">April</option>                            
                <option value="04">May</option>                            
                <option value="05">June</option>                            
                <option value="06">July</option>                            
                <option value="07">August</option>                            
                <option value="08">September</option>                            
                <option value="09">October</option>                            
                <option value="10">November</option>                            
                <option value="11">December</option>                            
            </select>
            </label>

            <div id="calendarTwo" class="row py-5"></div>
        </div>
        <div class="container py-5 hideContent thankYou text-center">
            <h1 class="display-4 p-5">Thank You! <br> We'll be in touch as soon as possible!</h1>
        </div>
    </div>