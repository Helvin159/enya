import '../css/styles.css'

// Modules
import DayClick from './modules/Dayclick';


// Initiate Module
const dayclick = new DayClick;

// Allow JS & CSS to display without page refresh
if(module.hot){
    module.hot.accept()
}