import $ from 'jquery'

class DayClick{
    constructor(){
        this.days = $('.days');
        this.agendaShown = true;
        this.events();
    }


    events(){
        if(this.agendaShown === false){
            this.days.on('click', this.showAgenda)
        }
        
        if(this.agendaShown === true){
            this.days.on('click', this.closeAgenda)
        }
    }


    // Methods
    showAgenda(){
        $('.agenda').addClass('showAgenda')
        this.agendaShown = true;
    }

    closeAgenda(){
            $('.agenda').removeClass('showAgenda')
            this.agendaShown = false;
        }
    
}
    
export default DayClick;