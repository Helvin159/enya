class calendar {
    constructor(){
        const monthOptions = document.querySelector('#monthOptions');
        this.loadCalendar()
        this.events()
    }

    events(){

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

            // console.log(whatMonth, wow)
            // ****************************************
            // Day from (indexed 0 - 6 starting Sunday)
            // **************************************** 
            // console.log(date.getMonth())
            const firstDayOfMonth = new Date(date.getFullYear(), month, 1);
            const lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            const firstDay = String(firstDayOfMonth).substring(0,3);
            const lastDay = String(lastDayOfMonth).substring(0,4)
            // console.log(firstDay, lastDay)




            // ****************************************
            // Days of Week array (indexed 0 - 6 with daily value starting Sunday)
            // ****************************************
            const dayOfWeek = date.getDay();
            const day = date.getDate();
            const daysOfWeek = ['Sun','Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
            // console.log(daysOfWeek)
            // console.log(firstDay)
            let firstDayOfMonthKey =  daysOfWeek.indexOf(firstDay);
            
            // console.log(firstDayOfMonthKey)
            // console.log('this is today', day)

            

            // ****************************************
            // Loop
            // ****************************************
            let i = 1;
            let btnId = 345;
            let weekday = firstDayOfMonthKey;
            while(i < daysInMonth){
                // Elements
                let newDayElem = document.createElement('div');
                let container = document.createElement('div');
                let containerTwo = document.createElement('div');
                let header5 = document.createElement('h5')
                let p = document.createElement('p');

                // Attributes
                if(i >= day){
                    containerTwo.setAttribute('id', i)
                }
                
                

                // Classes
                // ***********
                container.classList.add('container');
                newDayElem.classList.add('cal', 'col-lg-1', 'py-4', 'days',);
                containerTwo.classList.add('container', 'day')
                p.classList.add('px-5', 'fontSize28')
                if(i >= day ){
                    containerTwo.classList.add('openTime');
                }
                // BG AND FONT LOGIC
                if(i == day){
                    header5.classList.add('todayFont')
                    p.classList.add('todayFont')
                }else {
                    header5.classList.add('colorD')
                }
                
                // Previous Day Background Colors 
                if(i < day ){ 
                    newDayElem.classList.add('previousDateOverlay')
                } 

                // Today Background
                if(i === day){ 
                    newDayElem.classList.add('todayBg') 
                } 
                
                // Inner Text
                // ************
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
                // ************
                newDayElem.appendChild(container);
                container.appendChild(header5)
                newDayElem.appendChild(containerTwo)
                containerTwo.appendChild(p)

                
                calendarElement.appendChild(newDayElem);
                i++;
                btnId++;
            }
        
                
        }
        
        // Change Month With Select Tag
        changeMonth(){

            const date = new Date()
            const day = date.getDate();
            const dayOfWeek = date.getDay();
            const year = date.getFullYear();
            // console.log(year)
            const currentMonth = date.getMonth();
            
            // let month = date.getMonth();
            const calendarElement = document.querySelector('#calendarTwo');
            // const daysInMonth = new Date(year, month,0).getDate();
            let inputMonth = document.querySelector('#monthOptions');


            // console.log(currentMonth)
            // console.log(selectedMonth)
            
            // ****************************************
            // Change Month with Input
            // ****************************************
            inputMonth.addEventListener('change', ()=>{
                calendarElement.innerHTML = ''
                // console.log('Input Value', inputMonth.value) 
                let selectedMonth = inputMonth.value;



            // console.log(currentMonth)
            console.log(selectedMonth)



                let daysOfMonth = new Date(year,selectedMonth , 0).getDate();


                
                let firstOfMonth = new Date(year, selectedMonth - 1, 1);
                let lastOfMonth = new Date(year, selectedMonth - 1 + 1, 0);
                let firstDay = String(firstOfMonth).substring(0,3);
                let lastDay = String(lastOfMonth).substring(0,3)
                // console.log('First & Last Day of the Input Month',firstDay, lastDay)


                // ****************************************
                // Days of Week array (indexed 0 - 6 with daily value starting Sunday)
                // ****************************************
                let dayOfWeek = date.getDay();
                // const day = date.getDate();
                const daysOfWeek = ['Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
                let firstDayOfMonthKey =  daysOfWeek.indexOf(firstDay);

                

                // ****************************************
                // Loop
                // ****************************************
                let i = 1;
                let weekday = firstDayOfMonthKey;
                while(i <= daysOfMonth){
                 // Elements
                let newDayElem = document.createElement('div');
                let container = document.createElement('div');
                let containerTwo = document.createElement('div');
                let header5 = document.createElement('h5')
                let p = document.createElement('p');


                // console.log('C', currentMonth)
                // console.log('S', selectedMonth)
                // Attributes
                if(i >= day && selectedMonth - 1 >= currentMonth){
                    containerTwo.setAttribute('id', i)
                }
                // Classes 
                container.classList.add('container');
                newDayElem.classList.add('cal', 'col-lg-1', 'py-4', 'days');
                header5.classList.add('colorD')
                containerTwo.classList.add('container', 'day')
                p.classList.add('px-5', 'fontSize28')
                if(i === day && selectedMonth - 1 === currentMonth ){
                    header5.classList.remove('colorD')
                    header5.classList.add('todayFont')
                    p.classList.add('todayFont')
                }else {
                    header5.classList.add('colorD')
                }

                if(i >= day ){
                    containerTwo.classList.add('openTime');
                }

                
                // Previous Day & Month Background Colors 
                if(i < day && selectedMonth -1 < currentMonth ){ 
                    newDayElem.classList.add('previousDateOverlay')
                }
                
                if(selectedMonth - 1 < currentMonth){ 
                    newDayElem.classList.add('previousDateOverlay')
                } 


                // Today Background
                if(i === day && currentMonth === selectedMonth - 1){ 
                    newDayElem.classList.add('todayBg') 
                } 

                // Inner Text
                if(i <= 1 && currentMonth === selectedMonth - 1){
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