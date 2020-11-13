import '../css/styles.css'

// Modules
// import DayClick from './modules/Dayclick';
import Form from './modules/Form';
import Calendar from './modules/Calendar';
import Click from './modules/Click';


// Initiate Module
// const dayclick = new DayClick;
const form = new Form;
const calendar = new Calendar;
const click = new Click;



// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}



// document.getElementsByClassName('img-fluid')

        