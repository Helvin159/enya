<div class="container-fluid sectionThree text-center">
    <h1 class="pt-5 pb-3 colorD">
        <?php 
            if($_SERVER['REQUEST_URI'] == '/'){
                echo 'Contact Me';
            } else if($_SERVER['REQUEST_URI'] == '/contact/' or $_SERVER['REQUEST_URI'] == '/pages/enya/contact/'){
                echo 'Not Ready To Book'; echo '<br>'; echo 'Send Me A Message!';
            }
        ?>

    </h1>
    <hr class="w-50 pb-4 colorD">
    <div class="container contactFormContainer colorD">
        <label for="name" class="text-left millgoudy fontSize18">
            Name:
            <br>
            <input type="text" name="name" placeholder="Name" required>
        </label>
        <br>
        <label for="email" class="text-left millgoudy fontSize18">
            Email:
            <br>
            <input type="email" name="email" placeholder="Email" required>
        </label>
        <br>
        <label for="phone" class="text-left millgoudy fontSize18">
            Phone:
            <br>
            <input type="tel" name="phone" placeholder="Phone" required>
        </label>
        <br>
        <label for="" class="text-left millgoudy fontSize18">
            Date: 
            <br>
            <input type="date" name="date" required>
        </label>
        <br>
        <textarea name="" id="" cols="30" rows="10" class="millgoudy">

        </textarea>
        <br>
        <button class="btn button my-3 colorD">Submit</button>
    </div>

</div>