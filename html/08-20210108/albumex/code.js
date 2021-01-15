var row = document.getElementById('rowOne');
var a=true;
function openClose(){
    
    if(a){
        row.style.transitionDuration = '0.5s';
        row.style.display = 'block';
        row.style.transform = 'scaleY(1)';
        a = false;
    }else{
        row.style.transitionDuration = '0.5s';
        row.style.transform = 'scaleY(0)';
        row.style.display = 'none';
        a = true;
    }
}