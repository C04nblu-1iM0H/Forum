
$(document).ready(function(){
    $(".js-faq").on("click",function(e){
        e.preventDefault();
        var $this = $(this);
    $this.next().slideToggle(600);

});
    });




