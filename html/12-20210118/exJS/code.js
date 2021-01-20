

// Bật tắt đèn

// var a=document.getElementById('bulb'), m=true;
// function OnOffBulb(){
//     if(m){
//         a.src="./image/onbulb.jpg";
//         m = false;
//     }else{
//         m = true;
//         a.src="./image/offbulb.jpg";
//     }
// }

// Cách 2
// function OnOffBulb(){
//     console.log(document.getElementById('bulb').src)
//     if(document.getElementById('bulb').src == 'http://127.0.0.1:5500/12-20210118/exJS/image/offbulb.jpg'){
//         document.getElementById('bulb').src = './image/onbulb.jpg';
//     }else{
//         document.getElementById('bulb').src = './image/offbulb.jpg';
//     }
// }
// cách 3
// var a = document.getElementById('bulb').src;
// var ketQua = a.includes('./image/offbulb.jpg');  

// dung jQuery
var img = document.getElementById("bulb");
$(document).ready(function () {
    $("button").click(function () { 
        if(img.src=="http://127.0.0.1:5500/12-20210118/exJS/image/offbulb.jpg"){
        $("#bulb").attr("src", "http://127.0.0.1:5500/12-20210118/exJS/image/onbulb.jpg");
    }else{
        $("#bulb").attr("src", "http://127.0.0.1:5500/12-20210118/exJS/image/offbulb.jpg");
    }
    });
});

