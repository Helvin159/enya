import '../css/styles.css'

// Modules
// import DayClick from './modules/Dayclick';
import Form from './modules/Form';
import Calendar from './modules/Calendar';


// Initiate Module
// const dayclick = new DayClick;
const form = new Form;
const calendar = new Calendar;



// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}



// document.getElementsByClassName('img-fluid')

        