$('a').mouseup(function(e){
    if(e.which == 2){
        $('#log').append('<span>'  +'('+e.which +')</span><br/>');
    } 
    e.preventDefault();
    e.stopPropagation();
});


$(document).click(function(e){
            if (e.which != 3) {
                e.preventDefault();
                return false;
            }
        });// JavaScript Document