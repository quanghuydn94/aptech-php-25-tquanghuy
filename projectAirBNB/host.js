$(".Header__Button--Color").mousemove(function() {
    var val1 = Event.pageX/2;
    var val2 = Event.pageY/2;
    var rgbColor = "rgb(" + val1 + ", " + val2 + ")";
    $(".Header__Button--Color").css("background",rgbColor);
})