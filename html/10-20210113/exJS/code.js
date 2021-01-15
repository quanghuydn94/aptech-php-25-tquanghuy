
// Hiện tên

function hovaten(){
    console.log('Tran Quang Huy')
    document.getElementById('name').innerHTML= "Tran Quang Huy";
}
// Bật tắt đèn

var a=document.getElementById('bulb'), m=true, i=26;
function OnOffBulb(){
    if(m){
        a.src="./image/onbulb.jpg";
        m = false;
    }else{
        m = true;
        a.src="./image/offbulb.jpg";
    }
}

// Tăng giảm số lớp

var  h=25,  l=0 ;
function tangSo(){
        
      do{
        h++;
        document.getElementById('so').innerHTML = "PHP-" + h ;
         
    }while(h <25);
}
 function giamSo(){
    do{
        h--;
       document.getElementById('so').innerHTML = "PHP-" + h ;
       
    }while( l>=26); 
 }