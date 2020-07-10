$( document ).ready(function() {
    $( ".menu" ).hide();
    $( ".wrapper-menu" ).click(function() {
        $( ".wrapper-menu" ).toggleClass("open");  
        $( ".menu" ).slideToggle( "slow");
    });
    
    $( ".open" ).click(function() {
        $( ".wrapper-menu" ).toggleClass("open");  
        $( ".menu" ).slideToggle( "slow");
    });
});