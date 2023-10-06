const menuOpener = document.querySelector('.fly-out-menu-btn');
const menuCloser = document.querySelector('.close-menu');
const shadow = document.querySelector('div.shadow');
const menu = document.querySelector('.menu');

menuOpener.addEventListener('click',function(event){
    event.stopPropagation();
    menu.open = true;
});
menuCloser.addEventListener('click',function(event){
    event.stopPropagation();
    menu.open = false;
});
shadow.addEventListener('click',function(event){
    event.stopPropagation();
    if((event.target).className !== "menu") { menu.open = false; }
});
