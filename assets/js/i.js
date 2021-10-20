
var nut = document.querySelector('i.fa-caret-square-up');

nut.onclick = function(){
var chieucaoht = self.pageYOffset;

var set = chieucaoht;
var run = setInterval(function(){
    chieucaoht = chieucaoht - 0.05*set;
    window.scrollTo(0,chieucaoht);    
    if(chieucaoht <= 0){
        clearInterval(run);
    }        
},15)
}
