window.addEventListener('load',function(){
    let ouvert = false;
    let menuBurger = document.getElementsByClassName("menuBurger")[0];
    let menuMobile = document.getElementsByClassName("menuMobile")[0];
    menuBurger.addEventListener("click", function(e){
        ouvert = !ouvert;
        if(ouvert){
            menuMobile.style.transform = "translateX(0vh)";
            menuMobile.style.backgroundColor = "rgb(65, 65, 65)";
            menuBurger.style.transform = "rotateZ(90deg)";
        }else{
            menuMobile.style.transform = "translateX(-100vw)";
            menuMobile.style.backgroundColor = "rgb(25, 25, 25)";
            menuBurger.style.transform = "rotateZ(0deg)";
        }
    });
});