import $ from 'jquery'

class DayClick{
    constructor(){

        // this.days = document.getElementsByClassName('openTime');
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
    showAgenda(){
        if(this.agendaShown === false){
            setTimeout(() =>{
                let dayId = this.days.attr('id')
                $(`#${dayId}`).find($('.agenda')).addClass('showAgenda')
                // alert(`#${dayId}`)
                // this.input.addClass('focus')
                $(`#${dayId}`).find($('.closeBtn')).addClass('showAgenda')
                this.agendaShown = true
                console.log(this.agendaShown)
            }, 200)
        } 
    }

    closeAgenda(){
        if(this.agendaShown === true){
                        console.log(this.agendaShown)

            let dayId = this.days.attr('id')
            // alert(dayId);
            $(`#${dayId}`).find($('.agenda')).removeClass('showAgenda')
            $(`#${dayId}`).find($('.closeBtn')).removeClass('showAgenda')
            // this.agendaShown = false;
            // console.log(this.agendaShown)
        }
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