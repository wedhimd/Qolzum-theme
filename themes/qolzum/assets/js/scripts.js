const btnHamburger = document.querySelector("#btnHamburger");
const body = document.querySelector("body");
const header = document.querySelector(".header");
const overlay = document.querySelector(".overlay");
const fadeElements = document.querySelectorAll(".has-fade");
const carouselHero = document.getElementById("carouselHero");
const  navbar = document.querySelector(".navbar")

btnHamburger.addEventListener("click", function(event){
    event.stopPropagation();
    if(header.classList.contains("open")){ // close hamburger menu
        body.classList.remove(".noscroll");
        navbar.classList.remove("bg-light");
        header.classList.remove("open");
        fadeElements.forEach(function(element){
            element.classList.add("fade-out")
            element.classList.remove("fade-in")
        })
        
    }else{ // open hamburger menu
        event.stopPropagation();
        header.classList.add("open"); 
        navbar.classList.add("bg-light");
        body.classList.add(".noscroll");
        fadeElements.forEach(function(element){
            element.classList.add("fade-in")
            element.classList.remove("fade-out")
        });
        
    }

    // event.stopPropagation();
    
});

(function () {
    let current = location.pathname.split('/')[1];
    if (current === "") return;
    let menuItems = document.querySelectorAll('.navbar-nav .nav-item a');
    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].className += " active";
        }
    }
})();
