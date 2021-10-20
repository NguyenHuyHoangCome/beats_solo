
var nut = document.querySelectorAll('div.nut ul li');
var slides = document.querySelectorAll('div.slide div');
for(var i = 0 ; i < nut.length; i++){
nut[i].addEventListener('click',function(){
    for(var i = 0; i < slides.length; i++){
        slides[i].classList.remove('ra');
    }   
    var x = this.getAttribute('data-tendata');
    var y = document.getElementById(x);
    y.classList.add('ra');
})
}