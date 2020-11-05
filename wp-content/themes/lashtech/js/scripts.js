import '../css/styles.css'

// Modules
import DayClick from './modules/Dayclick';
import Form from './modules/Form';


// Initiate Module
const dayclick = new DayClick;
const form = new Form;

// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}



// document.getElementsByClassName('img-fluid')

        