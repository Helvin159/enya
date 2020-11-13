class click{
    constructor(){
        this.closeButton = document.querySelector('.closeBtn');
        this.isOpen = false;

        this.events()
    }


    events(){
        const dayBtn = document.querySelectorAll('.openTime');

        [...dayBtn].forEach(function(btn){
            btn.addEventListener('click', (e)=>{
                let dayId = e.currentTarget.id
                let selectedDay = e.target.value;
                console.log(dayId)
                console.log(selectedDay)
                let inactiveOverlay = document.querySelector('.overlay');
                console.log(inactiveOverlay)
                inactiveOverlay.classList.add('showOverlay');
                document.body.style.overflowY = 'hidden';
            } )
            
            })
            


        this.closeButton.addEventListener('click', this.closeOverlay.bind(this))
        
    }


    // Methods
    openOverlay(e){
        if(this.isOpen === false){
            let dayId = e.currentTarget.id
            // let selectedDay = e.target.value;
            console.log(dayId)
            let inactiveOverlay = document.querySelector('.overlay');
            console.log(inactiveOverlay)
            inactiveOverlay.classList.add('showOverlay');
            document.body.style.overflowY = 'hidden';
        }
        return this.isOpen = true;
    }
    

    closeOverlay(){
            let inactiveOverlay = document.querySelector('.overlay');
            console.log(inactiveOverlay)
            inactiveOverlay.classList.remove('showOverlay');
            document.body.style.overflowY = 'scroll';
    }
}
    
export default click;