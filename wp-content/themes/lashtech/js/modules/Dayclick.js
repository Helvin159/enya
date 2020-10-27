import $ from 'jquery'

class DayClick{
    constructor(){
        this.days = $('.openTime');
        this.agenda = $('.agenda');
        this.closeBtn = $('.closeBtn');
        this.input = $('.bookingTimeOption');
        this.agendaShown = false;
        this.events();
    }


    events(){
        this.days.on('click', this.showAgenda.bind(this));
        this.closeBtn.on('click', this.closeAgenda.bind(this));            
    }


    // Methods
    showAgenda(){
            this.agenda.addClass('showAgenda')
            this.input.addClass('focus')
            this.closeBtn.addClass('showAgenda');
            this.agendaShown = true;
            // console.log(this.agendaShown)
    }

    closeAgenda(){
        if(this.agendaShown === true){
            this.agenda.removeClass('showAgenda')
            this.closeBtn.removeClass('showAgenda');
            this.agendaShown = false;
            // console.log(this.agendaShown)
        }
    }
    
}
    
export default DayClick;