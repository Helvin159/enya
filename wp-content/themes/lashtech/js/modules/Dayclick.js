import $ from 'jquery'

class DayClick{
    constructor(){
        // const days = document.querySelectorAll('.openTIme');
        this.days = $('.openTime');
        this.agenda = $('.agenda');
        this.closeBtn = $('.closeBtn');
        this.bookSesh = $('.bookSesh');
        this.thankYou = $('.thankYou');
        this.calendar = $('.calendar');
        this.calendarTitle = $('.contactTitle');
        this.input = $('.bookingTimeOption');
        this.agendaShown = false;

        this.events();
    }


    events(){
        this.days.on('click', this.showAgenda.bind(this));
        this.closeBtn.on('click', this.closeAgenda.bind(this));            
        this.bookSesh.on('click', this.bookSession.bind(this));       
    }


    // Methods
    showAgenda(e){
        if(this.agendaShown === false){
            setTimeout(() =>{
                let dayId = e.currentTarget.id
                // console.log(e.currentTarget.id)
                $(`#${dayId}`).find($('.agenda')).addClass('showAgenda')
                // alert(`#${dayId}`)
                // this.input.addClass('focus')
                $(`#${dayId}`).find($('.closeBtn')).addClass('showAgenda')
            }, 100)
        } 
        console.log(this.agendaShown)        
        return this.agendaShown = true
    }

    closeAgenda(){
        if(this.agendaShown === true){
            $('.agenda').removeClass('showAgenda')
            $('.closeBtn').removeClass('showAgenda')
        }
        console.log(this.agendaShown)
        return this.agendaShown = false;
    }
    bookSession(){
        if(this.agendaShown === true){
            setTimeout(() => {
                this.thankYou.removeClass('hideContent');
                this.calendar.addClass('hideContent');
                this.calendarTitle.addClass('hideContent');
                this.agenda.removeClass('showAgenda');
                this.closeBtn.removeClass('showAgenda');
                this.agendaShown = false;
            // console.log(this.agendaShown)
            }, 850)   
        }
    }
    
}
    
export default DayClick;