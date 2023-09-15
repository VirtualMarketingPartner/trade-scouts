jQuery(function($){
// create a circle
$(window).on("load scroll resize", function() {
    $('.circle').each(function(){
        var circleW = $(this).width();
        var circleH = $(this).height();
        if( circleH != circleW ){
            circleH = circleW;
        }
        $(this).height(circleH);
    });
    
    var matchHeight = 0;
    $('.matchHeight').each(function(){
        if( $(this).height() > matchHeight){
            matchHeight = $(this).height();
        }
    });
    $('.matchHeight').height(matchHeight);

});

});