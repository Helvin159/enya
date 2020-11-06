<div class="container-fluid py-5 text-center">
    <div class="container showCard dateCard p-5 contactFormContainer">
        <h1 class="py-3">Pick A Date</h1>
            <label for="">
                Date: <br>
                <input type="date" required>
            </label>
            <br>
            <button id="nextOne" class="btn fontSize20 button my-3 colorD">Next <i class="fas fa-arrow-right"></i></button>
    </div>
    <div class="container  dateCard p-3 my-5 contactFormContainer">
        <h1 class="py-3">Lash Type</h1>
            <label for="">
            Lash Set: <br>
                <select name="set" name="lashType" id="" placeholder="" class="millgoudy fontSize18">
                    <option name="set1" value="setOne">Set 1</option>
                    <option name="set2" value="setTwo">Set 2</option>
                    <option  name="set3" value="setThree">Set 3</option>
                </select>
            </label>
            <br>
            <button id="nextTwo" class="noSubmit btn fontSize20 button my-3 colorD">Next <i class="fas fa-arrow-right"></i></button>
    </div>
    <div class="container  dateCard p-3 contactFormContainer">
        <h1 class="py-3">Contact Info.</h1>
        <form action="" method="post">
            <label for="">
            Name: <br>
            <input type="text" required>
            </label>
            <br>
            <label for="">
            Phone Number: <br>
            <input type="tel" required>
            </label>   
            <br>         
            <label for="">
            Email: <br>
            <input type="email" required>
            </label>
            <br>
            <button id="submitBooking" class="btn fontSize20 button my-3 colorD">Submit</button>
        </form>
    </div>
    <div class="container py-5 thankYou text-center">
        <h1 class="display-4 p-5">Thank You! <br> We'll be in touch as soon as possible!</h1>
    </div>
</div>