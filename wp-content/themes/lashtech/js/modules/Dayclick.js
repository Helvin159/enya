import $ from 'jquery'

class DayClick{
    constructor(){
        this.days = $('.dayBtns');
        this.agenda = $('.agenda');
        this.agendaShown = false;
        this.events();
    }


    events(){
        this.days.on('click', this.showAgenda.bind(this));

        // this.days.on('click', this.closeAgenda.bind(this));            
    }


    // Methods
    showAgenda(){
            this.agenda.addClass('showAgenda')
            this.agendaShown = true;
            // console.log(this.days.val()) 
            // console.log(this.days.attr()) 
    }

    closeAgenda(){
        if(this.agendaShown){
            this.agenda.removeClass('showAgenda')
            this.agendaShown = false;
            console.log(this.agendaShown)
        }
    }
    
}
    
export default DayClick;