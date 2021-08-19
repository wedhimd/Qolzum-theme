class Search{
    constructor(){
        this.addSearchHTML();
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

    addSearchHTML(){
        $("body").append(`
        <div class="search-overlay">
        <div class="search-overlay__top">
            <div class="container">
                <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                <input type="text" class="search-term" id="search-term" placeholder=" ماذا تبحث؟">
                <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
            </div>
        </div>
        <div class="container">
            <div id="search-overlay__results">
                
            </div>
        </div>
    </div>
        `);
    }
}