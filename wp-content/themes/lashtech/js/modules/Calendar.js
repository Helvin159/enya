class calendar {
    constructor(){
        const monthOptions = document.querySelector('#monthOptions');

        this.events()
    }

    events(){

        window.addEventListener('load', this.loadCalendar);
        monthOptions.addEventListener('click', this.changeMonth())
    }

    // ****************************************
    // Methods
    // ****************************************

        // Load Current Month
        loadCalendar(){
            const date = new Date()
            const year = date.getFullYear();
            let month = date.getMonth();
            const calendarElement = document.querySelector('#calendarTwo');
            const daysInMonth = new Date(year, month,0).getDate();
            let inputMonth = document.querySelector('#monthOptions');
            inputMonth.value = month + 1;


            let whatMonth = date.getMonth();
            let wow =  new Date(year, 2,0).getDate();

            console.log(whatMonth, wow)
            // ****************************************
            // Day from (indexed 0 - 6 starting Sunday)
            // **************************************** 
            console.log(date.getMonth())
            const firstDayOfMonth = new Date(date.getFullYear(), month, 1);
            const lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            const firstDay = String(firstDayOfMonth).substring(0,4);
            const lastDay = String(lastDayOfMonth).substring(0,4)
            console.log(firstDay, lastDay)




            // ****************************************
            // Days of Week array (indexed 0 - 6 with daily value starting Sunday)
            // ****************************************
            const dayOfWeek = date.getDay();
            const day = date.getDate();
            const daysOfWeek = ['Sun','Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
            // console.log(daysOfWeek)
            console.log(firstDay)
            let firstDayOfMonthKey =  daysOfWeek.indexOf('Sun');
            
            console.log(firstDayOfMonthKey)

            

            // ****************************************
            // Loop
            // ****************************************
            let i = 1;
            let weekday = firstDayOfMonthKey;
            while(i < daysInMonth){
                // Elements
                let newDayElem = document.createElement('div');
                let container = document.createElement('div');
                let containerTwo = document.createElement('div');
                let header5 = document.createElement('h5')
                let p = document.createElement('p');

                // Classes
                container.classList.add('container');
                newDayElem.classList.add('cal', 'col-lg-1', 'py-4', 'days',);
                header5.classList.add('colorD')
                containerTwo.classList.add('container', 'day')
                p.classList.add('px-5', 'fontSize28')

                // Inner Text
                if(i <= 1){
                    header5.innerText = daysOfWeek[weekday]
                    weekday++;

                }else {
                    header5.innerText = daysOfWeek[weekday]
                    weekday++;
                    if(weekday == 7){
                        weekday = 0
                    }
                }

                p.innerText = i

                // Append
                newDayElem.appendChild(container);
                container.appendChild(header5)
                newDayElem.appendChild(containerTwo)
                containerTwo.appendChild(p)

                
                calendarElement.appendChild(newDayElem);
                i++;

            }
        
                
        }
        
        // Change Month With Select Tag
        changeMonth(){

            const date = new Date()
            const day = date.getDate();
            const dayOfWeek = date.getDay();
            const year = date.getFullYear();
            // let month = date.getMonth();
            const calendarElement = document.querySelector('#calendarTwo');
            // const daysInMonth = new Date(year, month,0).getDate();
            let inputMonth = document.querySelector('#monthOptions');

            
            // ****************************************
            // Change Month with Input
            // ****************************************
            inputMonth.addEventListener('change', ()=>{
                calendarElement.innerHTML = ''
                console.log(inputMonth.value) 
                let selectedMonth = inputMonth.value;

                const daysOfMonth = new Date(year,selectedMonth,0).getDate();


                
                const firstOfMonth = new Date(date.getFullYear(), selectedMonth, 1);
                const lastOfMonth = new Date(date.getFullYear(), selectedMonth + 1, 0);
                const firstDay = String(firstOfMonth).substring(0,4);
                const lastDay = String(lastOfMonth).substring(0,4)
                console.log(firstDay, lastDay)


                // ****************************************
                // Days of Week array (indexed 0 - 6 with daily value starting Sunday)
                // ****************************************
                const dayOfWeek = date.getDay();
                const day = date.getDate();
                const daysOfWeek = ['Sun','Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
                
                

                // ****************************************
                // Loop
                // ****************************************
                let i = 1;
                let weekday = 0;
                while(i <= daysOfMonth){
                 // Elements
                let newDayElem = document.createElement('div');
                let container = document.createElement('div');
                let containerTwo = document.createElement('div');
                let header5 = document.createElement('h5')
                let p = document.createElement('p');

                // Classes 
                container.classList.add('container');
                newDayElem.classList.add('cal', 'col-lg-1', 'py-4', 'days');
                header5.classList.add('colorD')
                containerTwo.classList.add('container', 'day')
                p.classList.add('px-5', 'fontSize28')

                // Inner Text
                if(i <= 1){
                    header5.innerText = daysOfWeek[weekday]
                    weekday++;

                }else {
                    header5.innerText = daysOfWeek[weekday]
                    weekday++;
                    if(weekday == 7){
                        weekday = 0
                    }
                }
                p.innerText = i

                // Append
                newDayElem.appendChild(container);
                container.appendChild(header5)
                newDayElem.appendChild(containerTwo)
                containerTwo.appendChild(p)

                
                calendarElement.appendChild(newDayElem);
                i++;
                }



            });
        }

} 

export default calendar