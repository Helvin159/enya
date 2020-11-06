class Form{
    constructor(){
        this.dateCard = document.querySelectorAll('.dateCard');
        this.thankYouMsg = document.querySelector('.thankYou');
        this.nextOne = document.querySelector('#nextOne');
        this.nextTwo = document.querySelector('#nextTwo');
        this.submit = document.querySelector('#submitBooking');
        this.events();
    }



    events(){

    }


    // Methods
    next(){
        this.dateCard[0].style.display = 'none'
        this.dateCard[1].style.display = 'block'
    }

    nextTwo(){
        this.dateCard[1].style.display = 'none';
        this.dateCard[2].style.display = 'block';
    }

    submit(){
        this.dateCard.style.display = 'none';
        this.thankYouMsg.style.display = 'block'
    }
    
}
    
export default Form;