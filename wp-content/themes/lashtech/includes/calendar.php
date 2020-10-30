    <div class="container">
        <div class="row py-5 calendar">
            <?php 
                $count = 0;
                $btnId = 40;
                $day = date('D');
                $month = date('m');
                $year = date('Y');
                // $timeIntervals = 45;
                $hours = 24;
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
                while($count < $daysInMonth){ 
                    $count++; 
                    $btnId++;
                    ?>
                    <div  class="col-md-2 py-4 days  <?php if($count < date('j')){ echo 'previousDateOverlay';}; if($count == date('j')){ echo 'todayBg'; } ?> " >
                        <div id="<?php echo $count; ?>" class="container day  <?php if($count <= date('j')){ echo ' ';}else{ echo 'openTime'; }; if($count == date('j')){ echo 'todayFont'; } ?>   ">
                            <i id="<?php echo "$btnId"; ?>" class="far fa-times-circle <?php if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?> text-right closeBtn fontSize22"></i>
                            <p  class="px-5 fontSize28"><?php echo $count; ?></p>  
                                <div class="agenda  text-center">
                                    <input class="inputFields" type="text" name="name" placeholder="Anne Doe"> 
                                    <input class="inputFields" type="tel" name="phoneNumber" placeholder="(978)888-888">  
                                    <input class="inputFields" type="email" name="email" placeholder="Email"> 
                                    <input class="inputFields" type="time" name="time" >
                                    
                                    <div class="container py-2">
                                        <button  href="#" type="none"  class="bookSesh btn button <?php  if($count == date('j')){ echo 'todayFont'; }else{ echo 'colorD';} ?>">
                                        Book
                                        </button>
                                    </div>                                      
                                </div>
                            </div>
                        

                    </div>
                <?php 
                } ?>
                <div class="previousDateOverlay">
                    
                </div>
            </div>
        </div>
        <div class="container py-5 hideContent thankYou text-center">
            <h1 class="display-4 p-5">Thank You! <br> We'll be in touch as soon as possible!</h1>
        </div>
    </div>