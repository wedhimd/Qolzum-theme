class Search{
    constructor(){
        this.openBtton = document.querySelector(".js-search-trigger");
        this.closeButton = document.querySelector(".search-overlay__close");
        this.seachOverlay = document.querySelector(".search-overlay");
    }

    events(){
        this.openBtton.addEventListener("click", openOverlay);
        this.closeBtton.addEventListener("click", closeOverlay);
    }

    openOverlay(){
        this.seachOverlay.classList.add("search-overlay--active")                  
        
    }

    closeOverlay(){
        this.seachOverlay.classList.remove("search-overlay--active")
    }
}